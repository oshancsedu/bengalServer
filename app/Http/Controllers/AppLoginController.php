<?php
/**
 * Created by PhpStorm.
 * User: sifat
 * Date: 12/8/2015
 * Time: 12:05 AM
 */

namespace App\Http\Controllers;

use DB;
use Request;

class AppLoginController extends Controller{

    public function index()
    {
        $user_id=Request::input('userIDRequestParams');
        $password=sha1(Request::input('passwordRequestParams'));
        $user=DB::table('employee_info')->where('employee_id','like',$user_id)->where('password','like',$password)->get();
        if(sizeof($user)==1)
            return "true";
        return "false";
    }
}