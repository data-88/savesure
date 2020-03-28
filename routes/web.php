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

    /*About Page*/
    Route::get('adminPanel/about', 'aboutController@index')->name('about');
    Route::get('adminPanel/about/add', 'AboutController@create')->name('add-about');
    Route::post('adminPanel/about/store', 'AboutController@store')->name('store-about');
    Route::get('adminPanel/about/update/{id}', 'AboutController@edit')->name('edit-about');
    Route::post('adminPanel/about/update/{id}', 'AboutController@update')->name('update-about');

    /*Brands Page*/
    Route::get('adminPanel/brand', 'BrandsController@index')->name('brands');
    Route::get('adminPanel/brand/add', 'BrandsController@create')->name('add-brands');
    Route::post('adminPanel/brand/store', 'BrandsController@store')->name('store-brands');
    Route::get('adminPanel/brand/update/{id}', 'BrandsController@edit')->name('edit-brands');
    Route::post('adminPanel/brand/update/{id}', 'BrandsController@update')->name('update-brands');
    Route::post('adminPanel/brand/delete/{id}', 'BrandsController@destroy')->name('delete-brands');

    /*Model Page*/
    Route::get('adminPanel/model', 'ModelController@index')->name('model');
    Route::get('adminPanel/model/add', 'ModelController@create')->name('add-model');
    Route::post('adminPanel/model/store', 'ModelController@store')->name('store-model');
    Route::get('adminPanel/model/update/{id}', 'ModelController@edit')->name('edit-model');
    Route::post('adminPanel/model/update/{id}', 'ModelController@update')->name('update-model');
    Route::post('adminPanel/model/delete/{id}', 'ModelController@destroy')->name('delete-model');


    /*Route::get('adminPanel/getModel','ModelController@getModel');*/

    /*Variant Page*/
    Route::get('adminPanel/variant','VariantController@index')->name('variant');

    /*Company Pages*/
    Route::get('adminPanel/company', 'CompaniesController@index')->name('company');
    Route::get('adminPanel/company/add', 'CompaniesController@create')->name('add-company');
    Route::post('adminPanel/company/store', 'CompaniesController@store')->name('store-company');
    Route::get('adminPanel/company/update/{id}', 'CompaniesController@edit')->name('edit-company');
    Route::post('adminPanel/company/update/{id}', 'CompaniesController@update')->name('update-company');
    Route::post('adminPanel/company/delete/{id}', 'CompaniesController@destroy')->name('delete-company');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
