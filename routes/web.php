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

Route::get('/index', function () {
    return view('index');
});

Route::get('/lenca_sound', function () {
    return view('lenca_sound');
});

Route::get('/show_bussiness', function () {
    return view('show_bussiness');
});
Route::get('/heaven_multimedia', function () {
    return view('heaven_multimedia');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
