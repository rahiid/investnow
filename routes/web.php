<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contractus', function () {
    return view('contractus');
});
Route::post('contractus','ContractusController@store');

Route::get('/termsandconditions', function () {
    return view('termsandconditions');
});
Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});




Route::get('/user', function () {
    return view('user');
});
Route::get('/user', 'UserController@index')->middleware('verified');
Route::post('change_name','UserController@update1');
Route::post('change_email','UserController@update2');
Route::post('change_number','UserController@update3');


Route::get('/invest', function () {
    return view('invest');
});
Route::get('/invest', 'InvestController@index')->middleware('verified');
Route::post('invest','InvestController@store');


Route::get('/deposit', function () {
    return view('deposit');
});
Route::get('/deposit', 'DepositController@index')->middleware('verified');
Route::post('deposit','DepositController@store');



Route::get('/balancetransfer', function () {
    return view('balancetransfer');
});
Route::get('/balancetransfer', 'BalancetransferController@index')->middleware('verified');
Route::post('balancetransfer','BalancetransferController@store');


Route::get('/withdraw', function () {
    return view('withdraw');
});
Route::get('/withdraw', 'WithdrawController@index')->middleware('verified');
Route::post('withdraw','WithdrawController@store');



Route::get('/referrer', function () {
    return view('referrer');
});
Route::get('/referrer', 'ReferrerController@index')->middleware('verified');







Route::get('/investcal', function () {
    return view('investcal');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/lendingpro', function () {
    return view('lendingpro');
});

Route::get('/lendingproducts', function () {
    return view('lendingproducts');
});

Route::get('/stacking', function () {
    return view('stacking');
});

Route::get('/cs', function () {
    return view('cs');
});

