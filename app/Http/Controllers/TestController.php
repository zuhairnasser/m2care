<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get_orders()
    {
        return view("orders.index");
    }
    public function get_phone_detail()
    {
        return view("phone.phone_detail");
    }
    public function add_phone()
    {
        return view("phone.add_phone");
    }
    public function get_about()
    {
        return view("phone.phone_detail");
    }
    public function get_praivcy()
    {
        return view("phone.phone_detail");
    }
    public function get_terms()
    {
        return view("phone.phone_detail");
    }
    public function get_offers()
    {
        return view("phone.phone_detail");
    }
    public function get_profile()
    {
        return view("phone.phone_detail");
    }
}
