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

Route::get('/', function () {
    return view('donate');
});

Route::post('/donate', 'DonationController@store');

Route::any('payways/{gateway}', 'PaymentCallbackController@handleCallback');