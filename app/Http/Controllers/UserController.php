<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Zone;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::where('id', $id);
        $user = $user->with('zone', 'city')->get();
        $user = $user[0];

        return view("profile.index", compact("user"));
    }
    public function edit()
    {
        $zones = Zone::all();
        $citeis = City::all();
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->with("zone", "city")->get();
        $user = $user[0];
        return view("profile.edit", compact("user", "zones", "citeis"));
    }

    public function store(Request $request)
    {
    }

    public function update(Request $request, $user)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:20',
            'gender' => 'required',
            'city' => 'required',
            'zone' => 'required',


        ]);

        $user = User::find($user);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->gender = $request->gender;
        $user->zone_id = $request->zone;
        $user->city_id = $request->city;
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(300, 300)->save($location);
            $user->profile_photo_path = $filename;
        }
        $user->save();

        return redirect('/profile');
    }
}
