<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;

class ConfigController extends Controller
{
    public function about()
    {
        $about =   Config::get("about")->first();

        return view("config.about", compact("about"));
    }
    public function terms()
    {
        $terms =   Config::get("terms")->first();

        return view("config.terms", compact("terms"));
    }
    public function privacy()
    {
        $privacy =   Config::get("privacy")->first();

        return view("config.privacy", compact("privacy"));
    }
}
