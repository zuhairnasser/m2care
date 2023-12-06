<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;

    public function malfunction_category()
    {
        return $this->belongsTo(Malfunction_category::class);
    }

    public function malfunction_sub_category()
    {
        return $this->belongsTo(Malfunction_sub_category::class);
    }
}
