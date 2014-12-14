<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/20/2014
 * Time: 10:29 PM
 */

class AdminAuthController extends \BaseController {

    public function getLogin(){
        return View::make('admins.auth.login');
    }

    public function postLogin(){
        $data = Input::all();

        $validator = Validator::make($data, User::$auth_rules);
        if($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        if(Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))){
            return Redirect::intended('admins');
        }

        return Redirect::route('admins.login')->with('errormessage','Username atau password anda salah.');
    }

    public function getLogout(){
        Auth::logout();
        return Redirect::route('admins.login');
    }

    public function getBack(){
        Auth::logout();
        return Redirect::route('home');
    }
} 