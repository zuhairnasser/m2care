<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Traits\ApiTrait;
use App\Http\Traits\HelpTrait;
use App\Http\Traits\Notify;

class AuthController extends Controller
{

    use ApiTrait;
    use HelpTrait;
    use Notify;


    public function index() //  return otp screen to the user
    {
        return view("");
    }

    public function send_otp(Request $request) //send opt message to the backend
    {



        $lang = (isset($request->lang)) ? $request->lang : 'ar';
        App::setLocale($lang);
        $conditions = ['email' => 'required|email|max:200', 'password' => 'required|string|max:200', "firebase_id" => "required"];
        $all_request = $request->all();
        $check_failure = $this->check_failure($all_request, $conditions);
        if ($check_failure) {
            return $check_failure;
        }

        $email = $request->email;
        $password = $request->password;
        $firebase_id = $request->firebase_id;
        $user = User::whereEmail($email)->first();

        $user->password = bcrypt($password);

        if (!$user) {
            $this->successStatus = 401;
            return $this->custom_error(__("Unauthorized"));
        }

        if (!Hash::check($password, $user->password)) {

            $this->successStatus = 401;
            return $this->custom_error(__("Unauthorized"));
        }


        DB::table('users')->where("firebase_id", $firebase_id)->update(['firebase_id' => NULL]);

        $user = User::find($user->id);

        if ($user->is_active == 0) {
            $ResponseMessage = __("Your current account is temporarily suspended");
            $check_success = $this->custom_error($ResponseMessage);
            return $check_success;
        }


        if ($user->user_type_id == 1) {
            $ResponseMessage = __("You do not have permission to login");
        }

        $user->last_interactive = date("Y-m-d h:i:s");
        $user->last_login = date("Y-m-d h:i:s");
        $user->firebase_id = $firebase_id;
        $user->update();

        $tokenResult = $user->createToken('saafer admin');
        $token = $tokenResult->plainTextToken;
        $user = User::with(['user_type'])->find($user->id);

        $success['user'] = $user;
        $success['token'] = $token;

        $ResponseMessage = __("welcome");
        $check_success = $this->check_success($ResponseMessage, $success);
        return $check_success;
    }
}
