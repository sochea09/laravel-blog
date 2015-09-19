<?php

namespace App\Http\Controllers\Auth;

use App\Model\User as UserModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Hash;
use Redirect;
use Session;

class AuthAdmin extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(Request $request){

        $username = $request->input("usr_name");
        $password = $request->input("usr_password");

        $user = UserModel::where("usr_name", $username)->orWhere("usr_email", $username)->first();

        if (!$user) {
            return "Invalid username or email.";
        }

        if (!Hash::check($password, $user->usr_password)) {
            return "Invalid password, please try again.";
        }

        if (!$user->usr_active_fg) {
            return "Account is not activated.";
        }
        //settime for last login
        $user->usr_last_login_dt = date('Y-m-d H:i:s');

        if (!$user->save()) {
            return "There was an error on sign in, please try again.";
        }

        Session::put('user', $user);

        return Redirect::route('dashboard');
    }

    public function getRegister(){
        return view('auth.register');
    }

    public function postRegister(Request $request){

        $time = time();

        $user = new UserModel();
        $user->usr_name = $request->input('usr_name');
        $user->usr_email = $request->input('usr_email');
        $user->usr_password = Hash::make($request->input('usr_password'));
        $user->usr_access_token = md5(uniqid($time, $request->input('usr_email')));
        $user->usr_reset_token = md5(uniqid($time, $request->input('usr_email')));
        $user->usr_active_fg = true;
        $user->rol_id = 1;

        if(!$user->save()){
            return 'error';
        }

    }

    public function getLogout(){

        Session::forget('user');

        return Redirect::to('auth/login');
    }
}
