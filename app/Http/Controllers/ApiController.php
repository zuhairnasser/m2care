<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone_model;

class ApiController extends Controller
{
    public function get_phone_serial($serial_number)
    { {
            $endpoint = "http://m2tel.m2telecomksa.net/product/serial/" . trim($serial_number);
            $client = new \GuzzleHttp\Client();
            $data = null;
            try {
                $response = $client->request('GET', $endpoint);
                if ($response && $response->getStatusCode() == 200) {
                    $content = $response->getBody();
                    $data = json_decode($content, true);
                    return view('MS.phones.remote.phone_by_serial', compact('data'));
                }
                return view('MS.phones.remote.phone_by_serial', compact('data'));
            } catch (\Throwable $th) {
                $data = null;
                return view('MS.phones.remote.phone_by_serial', compact('data'));
            }
        }
    }


    public function get_phone_model($factory)
    {
        $models['models'] = Phone_model::where('factory_id', $factory)->get();
        
        return response()->json($models);
    }
}
