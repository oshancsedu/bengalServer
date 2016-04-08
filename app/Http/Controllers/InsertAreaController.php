<?php
/**
 * Created by PhpStorm.
 * User: sifat
 * Date: 12/13/2015
 * Time: 4:06 PM
 */

namespace App\Http\Controllers;

use DB;
use Request;


class InsertAreaController extends Controller{

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
        $distributorName=Request::input("distributorName");

        DB::table('rsoinfo')->insert([
            'RSO_Name'=>$rsoName,'MSID'=>$ms_id,'AreaName'=>$areaName,'AreaCode'=>$areaCode,'DistributorName'=>$distributorName
        ]);
    }
}
