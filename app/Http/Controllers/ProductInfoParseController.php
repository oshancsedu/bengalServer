<?php
/**
 * Created by PhpStorm.
 * User: sifat
 * Date: 12/15/2015
 * Time: 12:10 PM
 */

namespace App\Http\Controllers;

use DB;
use Request;

class ProductInfoParseController extends Controller{

    public function parseInfo()
    {
        $basicProductInfos=DB::table('basic_product_info')->get();
        $detailProductInfos=DB::table('product_detail_info')->get();
        return view('parse.productInfo')
            ->with('basicProductInfos',$basicProductInfos)
            ->with('len_basic_infos',sizeof($basicProductInfos))
            ->with('detailProductInfos',$detailProductInfos)
            ->with('len_detail_infos',sizeof($detailProductInfos));
    }
}