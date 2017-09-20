<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use ericliao79\l5allpay\allpay;

Route::get('/', function () {

    new allpay(
        config('ALLPAY_STORE_ID'),
        config('ALLPAY_HASH_KEY'),
        config('ALLPAY_HASH_IV')
    );


    return view('welcome');
});
