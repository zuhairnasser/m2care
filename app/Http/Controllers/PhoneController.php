<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPhoneRequest;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Factory;
use App\Models\Memory;
use App\Models\Phone_storage;
use App\Models\Phone;
use App\Models\Phone_model;
use App\Models\Screen;
use App\Models\Sim_card;
use App\Models\Support;
use Illuminate\Support\Facades\Auth;

class PhoneController extends Controller
{
    public function index()
    {
        $factories = Factory::get();
        $colors = Color::get();
        $memories = Memory::get();
        $phone_storages = Phone_storage::get();
        $phones = Phone::all();
        return view("welcome", compact("phones"));
    }

    public function search(Request $request)
    {
        $phone = Phone::where('serial_number', $request->phone_serial)->first();
    }
    public function create_serial_number()
    {
        return view("phone.create");
    }
    public function create()
    {
    }
    public function add_new_phone(Request $request)
    {
        if ($request->serial_number == 12345789) {
            $phone = Phone::where('id', 1701)
                ->with(
                    'factory',
                    'phone_type',
                    'phone_model',
                    'phone_storage',
                    'memory',
                    'color',
                    'screen',
                    'sim_card',
                    'support'
                )->first();

            return view("phone.store_phone", compact("phone"));
        } else {
            $factories = Factory::all();
            $models = Phone_model::all();
            $screens = Screen::all();
            $sims = Sim_card::all();
            $supports = Support::all();
            $colors = Color::all();
            $stoarages = Phone_storage::all();
            $memories = Memory::all();
            if (isset($request->no_inv)) {
                $show_invoic = true;
            } else {
                $show_invoic = false;
            }

            $phone = Phone::where('serial_number', $request->serial_number)->first();


            return view("phone.store_phone", compact(
                "phone",
                "screens",
                "models",
                "sims",
                "colors",
                "supports",
                "memories",
                "stoarages",
                "factories",
                "show_invoic"

            ));
        }
    }
    public function store(Request $request)
    {
    }
    public function store_phone(AddPhoneRequest $request)
    {
        $phone = new Phone();
        $phone->user_id = Auth::id();
        $phone->factory_id = $request->factory;
        $phone->phone_model_id = $request->model;
        $phone->color_id = $request->color;
        $phone->memory_id = $request->memory;
        $phone->phone_storage_id = $request->stoarge;
        if (isset($request->sim)) {
            $phone->sim_card_id = $request->sim;
        }
        if (isset($request->screen)) {
            $phone->screen_id = $request->screen;
        }
        $phone->save();
        session()->flash('add_phone');
        return redirect('/');
    }

    public function show($id)
    {
        $phone = Phone::findOrFail($id);
        return view("phone.show", compact("phone"));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
    }
}
