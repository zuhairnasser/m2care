<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Phone extends Model
{

    public function factory()
    {
        return $this->belongsTo(Factory::class);
    }



   public function phone_type()
    {
        return $this->belongsTo(Phone_type::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function phone_model()
    {
        return $this->belongsTo(Phone_model::class);
    }



    public function memory()
    {
        return $this->belongsTo(Memory::class);
    }


    public function color()
    {
        return $this->belongsTo(Color::class);
    }



    public function phone_storage()
    {
        return $this->belongsTo(Phone_storage::class);
    }



    public function screen()
    {
        return $this->belongsTo(Screen::class);
    }



    public function sim_card()
    {
        return $this->belongsTo(Sim_card::class);
    }


    public function support()
    {
        return $this->belongsTo(Support::class);
    }



        protected $appends = [
        'warranty_remaining_days',
    ];



      public function getWarrantyRemainingDaysAttribute()
    {

        $now=Carbon::now();

$formatted_dt2 = Carbon::parse($this->warranty_expires_at);

if($formatted_dt2 < $now){
    return 0;
}



$date_diff=$now->diffInDays($formatted_dt2);


        return $date_diff;
    }



}
