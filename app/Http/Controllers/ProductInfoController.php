<?php
/**
 * Created by PhpStorm.
 * User: sifat
 * Date: 12/7/2015
 * Time: 6:50 PM
 */

namespace App\Http\Controllers;

use DB;
use Request;

class ProductInfoController extends Controller{


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

        $biscuitInfo=DB::table('product_detail_info')->whereBetween('product_id', [1000, 2000])->orderBy('product_name')->get();
        $candyInfo=DB::table('product_detail_info')->whereBetween('product_id', [2000, 3000])->orderBy('product_name')->get();
        return view('viewProductInfo')
            ->with('biscuitInfo',$biscuitInfo)
            ->with('lenB',sizeof($biscuitInfo))
            ->with('candyInfo',$candyInfo)
            ->with('lenC',sizeof($candyInfo));
    }
}