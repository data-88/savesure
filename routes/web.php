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
    Route::post('create','FrontendController@storebike');
});

Route::group(['namespace' => 'Backend'], function () {
    Route::get('adminPanel', 'BackendController@index')->name('dashboard');

    /*Brands Page*/
    Route::get('adminPanel/brand', 'BrandsController@index')->name('brands');
    Route::get('adminPanel/brand/add', 'BrandsController@create')->name('add-brands');
    Route::post('adminPanel/brand/store', 'BrandsController@store')->name('store-brands');
    Route::get('adminPanel/brand/update/{id}', 'BrandsController@edit')->name('edit-brands');
    Route::post('adminPanel/brand/update/{id}', 'BrandsController@update')->name('update-brands');
    Route::post('adminPanel/brand/delete/{id}', 'BrandsController@destroy')->name('delete-brands');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
