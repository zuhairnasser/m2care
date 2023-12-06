<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Zone;
use App\Models\City;
use App\Models\User_type;
use App\Models\Chat_message;
use App\Models\Phone;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;

    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'city_id', 'zone_id', 'last_login'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        "first_name" => "string",
        "last_name" => "string",
        "phone_number" => "string",
        "email" => "string",
        "email_verified_at" => "datetime",
        "current_team_id" => "integer",
        "profile_photo_path" => "string",
        "dob" => "datetime",
        "gender" => "string",
        "user_type_id" => "integer",
        "city_id" => "integer",
        "zone_id" => "integer",
        "address" => "string",
        "lat" => "double",
        "long" => "double",
        "last_login" => "datetime",
        "last_interactive" => "datetime",
        "code" => "integer",
        "code_expires_at" => "datetime",
        "lang" => "string",
        "is_active" => "boolean",
        "is_verified" => "boolean",
        "firebase_id" => "string",

        "profile_photo_url" => "string"
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
        'image',
    ];




    public function getImageAttribute()
    {
        return config('app.image_url') . $this->profile_photo_path;
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }


    public function user_type()
    {
        return $this->belongsTo(User_type::class);
    }


    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function full_name()
    {

        return $this->first_name . ' ' . $this->last_name;
    }


    public function permissions()
    {


        $User_type = User_type::find($this->user_type_id);
        if ($User_type) {
            return explode(",", $User_type->module_ids);
        }

        return [];
    }


    public function chat_messages()
    {
        return $this->hasMany(Chat_message::class)->orderby('id', 'DESC');
    }



    public function phones()
    {
        return $this->hasMany(Phone::class)->orderby('id', 'DESC');
    }





    public function getDobAttribute($value)
    {

        $date = date_create($value);
        return date_format($date, "Y-m-d");
    }

    public function getProfilePhotoUrlAttribute()
    {
    }
}
