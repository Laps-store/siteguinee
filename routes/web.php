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
Route::group(['midleware'=>'web'], function(){
    Route::get('/', function(){ return view('home');});
    Route::get('/aboutus', function(){ return view('about_us');});
    Route::get('/staff', function(){ return view('carriere');});
    Route::get('/news', function(){ return view('news');});

    Auth::routes();

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/contact', 'contactController@getForm');
    Route::post('/contact', 'contactController@postForm');

    Route::get('/photo', 'photoController@getForm');
    Route::post('/photo', 'photoController@postForm');
});