<?php
/**
 * Created by PhpStorm.
 * User: sifat
 * Date: 12/8/2015
 * Time: 1:34 AM
 */

namespace App\Http\Controllers;

use DB;
use Request;

class MemoReceiveController extends Controller{

    public function index()
    {
        $userID=Request::input('userIDRequestParams');
        $areaName=Request::input("areaName");
        $areaCode=Request::input("areaCode");
        $distributorName=Request::input("distributorName");
        $supplyDate=Request::input("supplyDate");
        $productName=Request::input("productName");
        $productSize=Request::input("productSize");
        $comment=Request::input("commentOnProduct");
        $cost=Request::input("productCost");
        $packet=Request::input("productPacket");
        $carton=Request::input("productCarton");

        $productNames=explode("$",$productName);
        $productSizes=explode("$",$productSize);
        $comments=explode("$",$comment);
        $costs=explode("$",$cost);
        $packets=explode("$",$packet);
        $cartons=explode("$",$carton);


        $len=sizeof($productNames);

        for ($i=0; $i < $len-1; $i++) {
            DB::table('memoReport')->insert(
                [
                    'UserID'   => $userID,
                    'AreaName' => (string)$areaName,
                    'AreaCode' => $areaCode,
                    'DistributorName' => (string)$distributorName,
                    'SupplyDate' => (string)$supplyDate,
                    'ProductName' => (string)$productNames[$i],
                    'ProductSize' => (string)$productSizes[$i],
                    'ProductCost' => $costs[$i],
                    'Carton_Boyam_Tin'=>$cartons[$i],
                    'Packet' => $packets[$i],
                    'Comment' => (string)$comments[$i]
                ]
            );
        }


        return "Added!";
    }
}