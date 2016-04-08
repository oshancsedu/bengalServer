<?php
/**
 * Created by PhpStorm.
 * User: sifat
 * Date: 12/7/2015
 * Time: 3:08 PM
 */

namespace App\Http\Controllers;

use Request;
use App\User;

class RegistrationController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/


    public function getRegister()
    {
        return view('register');
    }

    public function postRegister()
    {
        //dd(Request::all());
        $user = new User;
        $user->user_id = Request::input('user_id');
        $user->password = bcrypt(Request::input('password'));
        $user->user_type = Request::input('user_type');

        $user->save();

        return redirect('login');
    }
}