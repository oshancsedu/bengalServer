<?php
/**
 * Created by PhpStorm.
 * User: sifat
 * Date: 12/12/2015
 * Time: 9:58 PM
 */

namespace App\Http\Controllers;
use DB;
use Request;
use Auth;
class EmployeeInfoController extends Controller{


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function viewInfo()
    {
        $userType=Auth::user()->user_type;
        if($userType=='admin')
            $rso="";
        else
            $rso=Auth::user()->user_id;

        $employeeInfo=DB::table('rsoinfo')->where('RSO_Name','like','%'.$rso.'%')->get();
        $rsoNames=DB::table('rsoinfo')->select('RSO_Name')->distinct()->get();
        $len=sizeof($employeeInfo);
        return view("employeeInfoAdmin")->with('employeeInfo',$employeeInfo)->with('len',$len)->with('rsoNames',$rsoNames);
    }
}