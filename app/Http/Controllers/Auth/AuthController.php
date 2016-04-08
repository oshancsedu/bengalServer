<?php namespace App\Http\Controllers\Auth;

use Auth;
use Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard  $auth
     * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
     * @return void
     */
    public function __construct(Guard $auth, Registrar $registrar)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getLogin()
    {
        $login =0;
        return view('login')->with('login',$login);
    }


    public function postLogin()
    {
        $userid = Request::input('user_id');
        $password = Request::input('password');
        $usertype = Request::input('user_type');

        if (Auth::attempt(['user_id' => $userid, 'password' => $password, 'user_type' => $usertype]))
        {
            return redirect()->intended('home');
        }
        $login =1;
        return view('login')->with('login',$login);
    }

    public function getLogout()
    {
        Auth::LogOut();
        return redirect('login');
    }
}