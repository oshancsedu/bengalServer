<?php namespace App\Http\Controllers;
use DB;
use Auth;
use Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $fTime = "";
        $tTime = "";
        $employeeId="";
        $product="";
        $userType=Auth::user()->user_type;

        //$memoInfo=DB::table('memoReport')-> get();

        if($userType=='admin')
            $rso="";
        else
            $rso=Auth::user()->user_id;

        $employeeID=DB::table('rsoinfo')->select('MSID')->where('RSO_Name','like','%'.$rso.'%')->distinct()->get();

        $areaCode=DB::table('rsoinfo')->select('AreaCode')->where('RSO_Name','like','%'.$rso.'%')->distinct()->orderBy('AreaCode', 'asc')->get();

        $memoInfo=DB::select(
            DB::raw("SELECT * FROM `memoReport` WHERE `UserID` in (SELECT DISTINCT MSID FROM `rsoinfo` WHERE `RSO_Name` like '%".$rso."%') ORDER BY `id` DESC"));
        /*$memoInfo=DB::table('memoReport')
            ->whereExists(function($query, $rso)
            {
                $query->select(DB::raw(1))
                    ->from('rsoinfo')->select('MSID')
                    ->where('RSO_Name','like','%'.$rso.'%')
                    ->distinct()
                    ->whereRaw('memoReport.UserID = rsoinfo.MSID');
            })
            ->get();*/



        $productName=DB::table('basic_product_info')->select('product_name')->get();
        return view('home')
            ->with("memoInfo",$memoInfo)
            ->with('len',sizeof($memoInfo))
            ->with('employee_id',$employeeID)
            ->with('area_code',$areaCode)
            ->with('productName',$productName)
            ->with('tTime',$tTime)
            ->with('fTime',$fTime)
            ->with('EmployeeId',$employeeId)
            ->with('Product',$product);
	}

    public function filter()
    {
        $employeeId=Request::input('EmployeeID');
        $SelectedAreaCode=Request::input('AreaCode');
        $product=Request::input('ProductName');
        $checkDate=Request::input('copy');
        $fDay=Request::input('dateFrom');
        $fMonth=Request::input('monthFrom');
        $fYear=Request::input('yearFrom');

        $tDay=Request::input('dateTo');
        $tMonth=Request::input('monthTo');
        $tYear=Request::input('yearTo');

        if($SelectedAreaCode!="")
            $areaCodeQuery= "AND `AreaCode` like  '".$SelectedAreaCode."'";
        else
            $areaCodeQuery="";

        $fTime = "";
        if ($fYear !== "N/A")
            $fTime = $fTime. $fYear."-";
        if ($fMonth !== "N/A")
            $fTime = $fTime. $fMonth."-";
        if ($fDay !== "N/A")
            $fTime = $fTime. $fDay;

        $tTime = "";
        if ($tYear !== "N/A")
            $tTime = $tTime. $tYear."-";
        if ($tMonth !== "N/A")
            $tTime = $tTime. $tMonth."-";
        if ($tDay !== "N/A")
            $tTime = $tTime. $tDay;



        if($checkDate=='on')
        $column="SupplyDate";
        else
        {
            $column="OrderDate";
            if($tTime!="")
                $tTime=$tTime. " 23:59:59";
        }

        $userType=Auth::user()->user_type;

        if($userType=='admin')
            $rso="";
        else
            $rso=Auth::user()->user_id;

        if($tTime=="")
        {
            $memoInfo=DB::select(DB::raw("SELECT * FROM `memoReport`
                WHERE `UserID` in (SELECT DISTINCT MSID FROM `rsoinfo` WHERE `RSO_Name` like '%".$rso."%')
                AND `UserID` like  '%".$employeeId."%'
                ".$areaCodeQuery."
                AND `ProductName` like  '%".$product."%'
                AND `".$column."` like  '".$fTime."%' ORDER BY `memoreport`.`TransActionID` DESC"));
        }

        else
        {
            $memoInfo=DB::select(DB::raw("SELECT * FROM `memoReport`
                WHERE `UserID` in (SELECT DISTINCT MSID FROM `rsoinfo` WHERE `RSO_Name` like '%".$rso."%')
                AND `UserID` like  '%".$employeeId."%'
                ".$areaCodeQuery."
                AND `ProductName` like  '%".$product."%'
                AND `".$column."` BETWEEN  '".$fTime."%' AND '".$tTime."' ORDER BY `memoreport`.`TransActionID` DESC"));

        }

        if($userType=='admin')
            $rso="";
        else
            $rso=Auth::user()->user_id;

        $employeeID=DB::table('rsoinfo')->select('MSID')->where('RSO_Name','like','%'.$rso.'%')->distinct()->get();
        $productName=DB::table('basic_product_info')->select('product_name')->get();
        $areaCode=DB::table('rsoinfo')->select('AreaCode')->where('RSO_Name','like','%'.$rso.'%')->distinct()->orderBy('AreaCode', 'asc')->get();

        return view('home')
            ->with("memoInfo",$memoInfo)
            ->with('len',sizeof($memoInfo))
            ->with('employee_id',$employeeID)
            ->with('area_code',$areaCode)
            ->with('productName',$productName)
            ->with('tTime',$tTime)
            ->with('fTime',$fTime)
            ->with('EmployeeId',$employeeId)
            ->with('AreaCode',$SelectedAreaCode)
            ->with('Product',$product);
    }
}