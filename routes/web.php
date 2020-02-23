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

/*---------------------------
Route::get('/', function () {
    return view('welcome');
});
---------------------------*/

/*Route::get('/','PagesController@index');

Route::get('/twowheeler','PagesController@twowheeler')->name('two-wheeler');

Route::get('/about','PagesController@about');*/

Route::group(['namespace' => 'Frontend'], function(){
    Route::get('/', 'FrontendController@index');
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('twowheeler', 'FrontendController@twowheeler')->name('two-wheeler');
    Route::get('about', 'FrontendController@about')->name('about-us');
});
