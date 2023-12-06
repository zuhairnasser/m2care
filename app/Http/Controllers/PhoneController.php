<?php

namespace App\Http\Controllers;

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
use App\Models\Storage;
use Illuminate\Support\Facades\Auth;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        if ($request->serial_number == 123456789) {
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
             
            return view("phone.add_phone", compact("phone"));
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
            return view("phone.add_phone", compact(
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'factory' => 'required|not_in:0',
            'model' => 'required|not_in:0',
            'color' => 'required|not_in:0',
            'memory' => 'required|not_in:0',
            'stoarge' => 'required|not_in:0',

        ]);
        $phone = new Phone();
        $phone->serial_number = 55545454;
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
        session()->flash('Add_college');
        return redirect('/phones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phone = Phone::findOrFail($id);
        return view("phone.show", compact("phone"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
