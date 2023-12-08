<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Factory;
use App\Models\Malfunction_category;
use App\Models\Malfunction_sub_category;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller

{

    public function index()
    {
        $orders = Order::with('order_details.malfunction_sub_category')->where('user_id', Auth::id())
            ->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $factories = Factory::all();
        $malfunctions = Malfunction_category::all();
        $accessories = Accessory::all();
        $clientIP = request()->ip();
        $yourUserIpAddress = $clientIP;
        $location = Location::get($yourUserIpAddress);
        return view("orders.create", compact("factories", "malfunctions", "location", "accessories"));
    }
    public function store(Request $request)
    {
        return $request;
    }
    public function show($id)
    {
    }
    public function edit($id)
    {
    }
    public function step_one(Request $request)
    {
        $request->validate([
            'factory' => 'required'
        ]);
        $factory = $request->factory;
        $accessories = Accessory::all();
        $collection = collect([]);
        if ($request->malfunctions != null) {
            foreach ($request->malfunctions as  $malfunction) {
                $data = Malfunction_category::where('id', $malfunction)->with('malfunction_sub_categories')->first();
                $data1[$data->name] = $data;
                $collection->push($data);
            }
        }

        return view("orders.step_2", compact('collection', 'accessories', 'factory'));
    }
    public function step_two(Request $request)
    {
        try {
            if ($request->input() != null) {
                foreach ($request->input() as $key => $value) {
                    $data[$key] = $value;
                }
            }
            return view("orders.step_3", compact("data"));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function step_three(Request $request)
    {
        $all_data =  $request->input();
        $data = $all_data;
        unset(
            $data['_token'],
            $data['date_to_catch_up'],
            $data['time'],
            $data['factory'],
            $data['note'],
            $data['catch_up'],
            $data['address']
        );

        $collection = collect();

        foreach ($data as $key => $value) {
            $result = Malfunction_sub_category::where('id', $value)->with('malfunction_category')->get();
            $collection->push($result);
        }

        return view("orders.step_4", compact("collection", "all_data"));
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
    }
}
