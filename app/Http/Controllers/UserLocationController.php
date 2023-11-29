<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class UserLocationController extends Controller
{
    public function index()
    {
        $clientIP = request()->ip();
        $yourUserIpAddress = $clientIP;
        $location = Location::get($yourUserIpAddress);
        return view('user.location', compact('location'));
    }
}
