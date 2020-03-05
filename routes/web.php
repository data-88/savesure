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

Route::group(['namespace' => 'Frontend'], function(){
    //Pages
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('twowheeler', 'FrontendController@twowheeler')->name('two-wheeler');
    Route::get('car','FrontendController@car')->name('car');
    Route::get('about', 'FrontendController@about')->name('about-us');
    Route::get('contact', 'FrontendController@contact')->name('contact-us');
    Route::get('preview/{id}', 'FrontendController@preview')->name('company-list');

    Route::get('getTypes','FrontendController@getTypes');
    Route::get('getVariants','FrontendController@getVariants');

    //Store Form Data Twowheeler
    Route::get('create','FrontendController@create');
    Route::post('create','FrontendController@storeBike');
});

