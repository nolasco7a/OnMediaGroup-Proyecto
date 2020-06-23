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
    return view('index');
})->name('index');

Route::get('/index',function(){
    return view('index');
})->name('index');

Route::get('/onmedia',function(){
    return view('onmedia');
})->name('onmedia');

Route::get('/lenca_sound', function(){
    return view('lenca_sound');
})->name('lenca_sound');

Route::get('/show_business','pageController@showBusiness',function(){
    return view('show_business');
})->name('show_business');

Route::get('/contacto','MessageController@create',function(){
    return view('contacto');
})->name('contacto');

Route::post('/contacto','MessageController@store');

Route::get('/portafolio','pageController@portafolios', function(){
    return view('portafolio');
})->name('portafolio');


Route::get('/succesmessage',function(){

    return view('layouts.SuccesMessage');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
