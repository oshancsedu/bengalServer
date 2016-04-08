<?php
/**
 * Created by PhpStorm.
 * User: sifat
 * Date: 1/1/2016
 * Time: 3:41 PM
 */

namespace App\Http\Controllers;

use Request;
use App\User;
use Auth;
use Hash;

class SettingsController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getSettings()
    {
        return view('settings');
    }

    public function postSettings()
    {
        $old = Request::input('old_password');
        $new = Request::input('new_password');
        $con_pass= Request::input('confirm_password');

        if($new===$con_pass)
        {
            $userid = Auth::user()->user_id;
            $user = User::find($userid);
            if(Hash::check($old,$user->password))
            {
                $user->password = bcrypt($new);
                $user->save();
                return redirect("home");
            }
        }
        return view('settings');
    }
}