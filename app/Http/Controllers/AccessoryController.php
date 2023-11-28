<?php

namespace App\Http\Controllers;

use App\Http\Traits\ApiTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AccessoryController extends Controller
{
    use ApiTrait;
    public function accessories(Request $request)
    {
        if (isset($request->lang)) {
            $lang = ($request->lang == 'ar') ? 'ar' : 'en';
        } else {
            $lang = 'en';
        }
        App::setLocale($lang);
        $accessories = Accessory::select('accessories.id', "accessories.name", "accessories.en_name")->get();

        $ResponseMessage =  ($lang == 'ar') ?  "accessories retrieved successfully" : "accessories retrieved successfully";
        $check_success =  $this->check_success($ResponseMessage, $accessories);
        return $check_success;
    }
}
