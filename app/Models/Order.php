<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    public function user() {
        return $this->belongsTo(User::class);
      }

          public function phone_type() {
        return $this->belongsTo(Phone_type::class);
      }



  public function replacement_phone() {
        return $this->belongsTo(Phone::class);
      }

      public function phone() {
        return $this->belongsTo(Phone::class);
      }

      public function order_status() {
        return $this->belongsTo(Order_status::class);
      }

          public function order_accessories() {
        return $this->hasMany(Order_accessory::class);
      }


           public function order_details() {
        return $this->hasMany(Order_detail::class);
      }


             public function invoices() {
        return $this->hasMany(Invoice::class)->whereIsActive(1);
      }


               public function all_invoices() {
        return $this->hasMany(Invoice::class)->orderby('id','DESC');
      }






          public function getScreenCracksImageAttribute($value)
    {
        return config('app.image_url').$value;
    }



}
