<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Factory;
use App\Http\Controllers\Controller;

class FactoryAPIController extends Controller
{


    //////////////////////////////////factories/////////////////////////////////


    public function factories(Request $request)
    {
        if (isset($request->lang)) {
            $lang = ($request->lang == 'ar') ? 'ar' : 'en';
        } else {
            $lang = 'en';
        }
        App::setLocale($lang);


        $factories = Factory::select('factories.*')->get();

        $ResponseMessage =  ($lang == 'ar') ?  "factories retrieved successfully" : "factories retrieved successfully";
        $check_success =  $this->check_success($ResponseMessage, $factories);
        return $check_success;
    }


    public function show_factory(Request $request)
    {

        if (isset($request->lang)) {
            $lang = ($request->lang == 'ar') ? 'ar' : 'en';
        } else {
            $lang = 'en';
        }
        App::setLocale($lang);




        // check_failure
        $conditions = ['factory_id' => 'required|exists:factories,id'];
        $all_request = $request->all();
        $check_failure =  $this->check_failure($all_request, $conditions);
        if ($check_failure) {
            return $check_failure;
        }

        $factory_id =  $request->factory_id;
        // check_failure
        $factory = Factory::select('factories.*')->find($factory_id);

        $ResponseMessage =  ($lang == 'ar') ?  "factory retrieved successfully" : "factory retrieved successfully";
        $check_success =  $this->check_success($ResponseMessage, $factory);
        return $check_success;
    }


    public function add_factory(Request $request)
    {
        if (isset($request->lang)) {
            $lang = ($request->lang == 'ar') ? 'ar' : 'en';
        } else {
            $lang = 'en';
        }
        App::setLocale($lang);
        $conditions = [
            'is_active' => 'required',
            'sorting' => 'required',
            'en_name' => 'required',
            'name' => 'required',
        ];
        $all_request = $request->all();
        $check_failure =  $this->check_failure($all_request, $conditions);
        if ($check_failure) {
            return $check_failure;
        }
        // check_failure

        $factory = new Factory();
        $factory->is_active = ($request->is_active) ? $request->is_active : 0;
        $factory->sorting = $request->sorting;
        $factory->en_name = $request->en_name;
        $factory->name = $request->name;



        $save = $factory->save();

        if ($save) {

            $ResponseMessage =  ($lang == 'ar') ?  "factory saved successfully" : "factory saved successfully";
            $check_success =  $this->check_success($ResponseMessage, $factory);
        } else {
            $ResponseMessage =  ($lang == 'ar') ?  "arabic error msg" : "english error msg";
            $check_success =  $this->custom_error($ResponseMessage);
        }
        return $check_success;
    }




    public function update_factory(Request $request)
    {

        if (isset($request->lang)) {
            $lang = ($request->lang == 'ar') ? 'ar' : 'en';
        } else {
            $lang = 'en';
        }
        App::setLocale($lang);


        $factory_id =  $request->factory_id;



        $conditions = ['factory_id' => 'required|exists:factories,id'];

        $all_request = $request->all();
        $check_failure =  $this->check_failure($all_request, $conditions);
        if ($check_failure) {
            return $check_failure;
        }
        // check_failure

        $factory = Factory::find($factory_id);

        // update
        $factory->is_active = ($request->is_active) ? $request->is_active : 0;
        if (isset($request->sorting)) {
            $factory->sorting = $request->sorting;
        }
        if (isset($request->en_name)) {
            $factory->en_name = $request->en_name;
        }
        if (isset($request->name)) {
            $factory->name = $request->name;
        }

        //  $columns = DB::getSchemaBuilder()->getColumnListing('factories');
        // foreach($request->all() as $key => $value){
        // if(in_array($key,$columns)){
        // $factory->$key = $value;
        // }
        //  }
        $factory->update();
        $ResponseMessage =  ($lang == 'ar') ?  "factory updated successfully" : "factory updated successfully";
        $check_success =  $this->check_success($ResponseMessage, $factory);

        return $check_success;
    }



    public function delete_factory(Request $request)
    {

        if (isset($request->lang)) {
            $lang = ($request->lang == 'ar') ? 'ar' : 'en';
        } else {
            $lang = 'en';
        }
        App::setLocale($lang);

        // check_failure
        $conditions = ['factory_id' => 'required|exists:factories,id'];
        $all_request = $request->all();
        $check_failure =  $this->check_failure($all_request, $conditions);
        if ($check_failure) {
            return $check_failure;
        }
        // check_failure
        $factory_id =  $request->factory_id;

        $factory = Factory::select('factories.*')->find($factory_id);
        $delete =  $factory->delete();

        $ResponseMessage =  ($lang == 'ar') ?  "factory deleted successfully" : "factory deleted successfully";
        $check_success =  $this->custom_success($ResponseMessage);
        return $check_success;
    }
}
