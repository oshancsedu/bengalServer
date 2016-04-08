<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'WelcomeController@index');
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('register', 'RegistrationController@getRegister');
Route::post('register', 'RegistrationController@postRegister');
Route::get('settings', 'SettingsController@getSettings');
Route::post('settings', 'SettingsController@postSettings');
Route::get('logout', 'Auth\AuthController@getLogout');
Route::get('home', 'HomeController@index');
Route::post('home', 'HomeController@filter');
Route::put('Update','UpdateController@updateInfo');
Route::get('ProductInfo','ProductInfoController@viewInfo');
Route::get('EmployeeInfo','EmployeeInfoController@viewInfo');
Route::post('InsertArea','InsertAreaController@index');
Route::post('InsertMS','InsertMSController@index');
Route::put('InsertMS','InsertMSController@updatePass');

Route::get('app/parseproductinfo','ProductInfoParseController@parseInfo');
Route::get('app/login','AppLoginController@index');
Route::get('app/memobasicinfo','MemoBasicInfoController@index');
Route::get('app/memoreceive','MemoReceiveController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);