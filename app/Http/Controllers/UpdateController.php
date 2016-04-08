<?php
/**
 * Created by PhpStorm.
 * User: sifat
 * Date: 12/12/2015
 * Time: 11:42 PM
 */

namespace App\Http\Controllers;

use DB;
use Request;

class UpdateController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function updateInfo()
    {
        $product_id=Request::input('id');
        $table_name=Request::input('table');
        $column=Request::input('column');
        $value=Request::input('value');
        $id_column=Request::input('id_col');
        DB::table($table_name)->where($id_column,$product_id)->update([$column=> $value]);

        return "Success!";
    }
}