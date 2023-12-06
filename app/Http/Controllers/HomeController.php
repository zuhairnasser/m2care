<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public  function index()
    {
        $phones = Phone::where('user_id', Auth::id())->get();
        
        return view("welcome", compact("phones"));
    }
}
