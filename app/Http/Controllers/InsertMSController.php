<?php
/**
 * Created by PhpStorm.
 * User: sifat
 * Date: 12/24/2015
 * Time: 8:33 PM
 */

namespace App\Http\Controllers;

use DB;
use Request;
class InsertMSController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ms_id=Request::input("ms_id");
        $rsoName=Request::input("rsoName");
        $areaName=Request::input("areaName");
        $areaCode=Request::input("areaCode");
        $password=Request::input("password");
        $distributorName=Request::input("distributorName");

        DB::table('rsoinfo')->insert([
            'RSO_Name'=>$rsoName,'MSID'=>$ms_id,'AreaName'=>$areaName,'AreaCode'=>$areaCode,'DistributorName'=>$distributorName
        ]);

        DB::table('employee_info')->insert([
            'employee_id'=>$ms_id,'password'=>sha1($password)
        ]);
    }

    public function updatePass()
    {
        $ms_id=Request::input("ms_id");
        $password=Request::input("password");
        DB::table('employee_info')
            ->where('employee_id', $ms_id)
            ->update(['password' => sha1($password)]);
    }

}