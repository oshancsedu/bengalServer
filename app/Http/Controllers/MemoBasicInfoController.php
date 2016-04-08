<?php
/**
 * Created by PhpStorm.
 * User: sifat
 * Date: 12/8/2015
 * Time: 12:10 AM
 */

namespace App\Http\Controllers;

use DB;
use Request;
class MemoBasicInfoController extends Controller{

    public function index()
    {
        $userID=Request::input('userIDRequestParams');
        $memoInfos=DB::table('rsoinfo')->select('AreaName','AreaCode','DistributorName')->where('MSID','like',$userID)->get();
        return view('parse.memobasicinfo')->with('memoInfos',$memoInfos)->with('len',sizeof($memoInfos));
    }
}