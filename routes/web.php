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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard','DashboardController@index')->name('Dashboard');
Route::get('/donate','DonateController@index')->name('Donate');
Route::get('/paymentsuccess/{amount}/{category}','PaymentsuccessController@index')->name('Payment successful');
Route::get('/useralert','UseralertController@index')->name('user alerts');
Route::get('/mail','MailController@basic_email')->name('mail');
