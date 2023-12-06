<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malfunction_sub_category extends Model
{
    use HasFactory;

    public function getImageAttribute($value)
    {
        return config('app.image_url').$value;
    }




    public function malfunction_category() {
        return $this->belongsTo(Malfunction_category::class);
      }

}
