<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/Home', 'HomeController@show');
Route::get('/si', 'Welcome@show');
Route::post('/welcome/Signin', 'Welcome@Signin')->name('Signin');
Route::get('/welcome/step1', 'Welcome@step1')->name('step1');
Route::get('/welcome/step2', 'Welcome@step2')->name('step2');
Route::get('/welcome/step3', 'Welcome@step3')->name('step3');
Route::get('/welcome/step4', 'Welcome@step4')->name('step4');
Route::get('/welcome/step5', 'Welcome@step5')->name('step5');
Route::get('/LoginPagesShow', 'LoginController@LoginPagesShow')->name('LoginPage');
Route::post('/LoginController/LoginDetail', 'LoginController@LoginDetail')->name('LoginDetail');
Route::get('/LoginController/VD', 'LoginController@VendorDashboard')->name('VD');
Route::get('/', function () {
    return view('welcome');
});
