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

Route::group(['namespace' => 'Frontend'], function () {
    //Pages
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('twowheeler/quotes-form', 'FrontendController@twowheeler')->name('two-wheeler');
    Route::get('car/quotes-form', 'FrontendController@car')->name('car');
    Route::get('about', 'FrontendController@about')->name('about-us');
    Route::get('contact', 'FrontendController@contact')->name('contact-us');
    Route::get('quotes/enquiry_{id}', 'FrontendController@preview')->name('company-list');
    Route::get('display/{id}/{user}', 'FrontendController@display')->name('display-list');

    Route::get('getTypes', 'FrontendController@getTypes');
    Route::get('getVariants', 'FrontendController@getVariants');

    //Store Form Data Twowheeler
    Route::get('create', 'FrontendController@create');
    Route::post('create', 'FrontendController@storebike');
});

/*----------------------
  BACKEND CONTROLLERS
----------------------*/

Route::group(['namespace' => 'Backend','middleware' => 'auth','middleware' => 'verified'], function () {

    Route::get('adminPanel', 'BackendController@index')->name('dashboard');

    /*User Profile*/
    Route::get('adminPanel/userProfile','userController@index')->name('profile');
    Route::post('adminPanel/userProfile','userController@update_avatar')->name('update-avatar');
    Route::post('adminPanel/changePassword','userController@changePassword')->name('update-password');

    /*About Page*/
    Route::get('adminPanel/about', 'aboutController@index')->name('about');
    Route::get('adminPanel/about/add', 'AboutController@create')->name('add-about');
    Route::post('adminPanel/about/store', 'AboutController@store')->name('store-about');
    Route::get('adminPanel/about/update/{id}', 'AboutController@edit')->name('edit-about');
    Route::post('adminPanel/about/update/{id}', 'AboutController@update')->name('update-about');

    /*Company Pages*/
    Route::get('adminPanel/company', 'CompaniesController@index')->name('company');
    Route::get('adminPanel/company/add', 'CompaniesController@create')->name('add-company');
    Route::post('adminPanel/company/store', 'CompaniesController@store')->name('store-company');
    Route::get('adminPanel/company/update/{id}', 'CompaniesController@edit')->name('edit-company');
    Route::post('adminPanel/company/update/{id}', 'CompaniesController@update')->name('update-company');
    Route::post('adminPanel/company/delete/{id}', 'CompaniesController@destroy')->name('delete-company');

    /*Premium Pages*/
    Route::get('adminPanel/premium','PremiumController@index')->name('premium');
    Route::get('adminPanel/premium/add','PremiumController@create')->name('add-premium');
    Route::post('adminPanel/premium/store','PremiumController@store')->name('store-premium');
    Route::get('adminPanel/premium/update/{id}', 'PremiumController@edit')->name('edit-premium');
    Route::post('adminPanel/premium/update/{id}', 'PremiumController@update')->name('update-premium');
    Route::post('adminPanel/premium/delete/{id}', 'PremiumController@destroy')->name('delete-premium');

    /*----------------------
    BIKE BACKEND CONTROLLERS
    ----------------------*/
    /*Brands Page*/
    Route::get('adminPanel/bike-brand', 'BikeBrandsController@index')->name('brands');
    Route::get('adminPanel/bike-brand/add', 'BikeBrandsController@create')->name('add-brands');
    Route::post('adminPanel/bike-brand/store', 'BikeBrandsController@store')->name('store-brands');
    Route::get('adminPanel/bike-brand/update/{id}', 'BikeBrandsController@edit')->name('edit-brands');
    Route::post('adminPanel/bike-brand/update/{id}', 'BikeBrandsController@update')->name('update-brands');
    Route::post('adminPanel/bike-brand/delete/{id}', 'BikeBrandsController@destroy')->name('delete-brands');

    /*Model Page*/
    Route::get('adminPanel/bike-model', 'BikeModelController@index')->name('model');
    Route::get('adminPanel/bike-model/add', 'BikeModelController@create')->name('add-model');
    Route::post('adminPanel/bike-model/store', 'BikeModelController@store')->name('store-model');
    Route::get('adminPanel/bike-model/update/{id}', 'BikeModelController@edit')->name('edit-model');
    Route::post('adminPanel/bike-model/update/{id}', 'BikeModelController@update')->name('update-model');
    Route::post('adminPanel/bike-model/delete/{id}', 'BikeModelController@destroy')->name('delete-model');


    /*Route::get('adminPanel/getModel','BikeModelController@getModel');*/

    /*Variant Page*/
    Route::get('adminPanel/bike-variant', 'BikeVariantController@index')->name('variant');
    Route::get('adminPanel/bike-variant/add', 'BikeVariantController@create')->name('add-variant');
    Route::post('adminPanel/bike-variant/store', 'BikeVariantController@store')->name('store-variant');
    Route::get('adminPanel/bike-variant/update/{id}', 'BikeVariantController@edit')->name('edit-variant');
    Route::post('adminPanel/bike-variant/update/{id}', 'BikeVariantController@update')->name('update-variant');
    Route::post('adminPanel/bike-variant/delete/{id}', 'BikeVariantController@destroy')->name('delete-variant');


    Route::get('getModel', 'BikeVariantController@getModel');

    /*----------------------
    CAR BACKEND CONTROLLERS
    ----------------------*/
    /*Brands Page*/
    Route::get('adminPanel/car-brand', 'CarBrandsController@index')->name('car-brands');
    Route::get('adminPanel/car-brand/add', 'CarBrandsController@create')->name('add-car-brands');
    Route::post('adminPanel/car-brand/store', 'CarBrandsController@store')->name('store-car-brands');
    Route::get('adminPanel/car-brand/update/{id}', 'CarBrandsController@edit')->name('edit-car-brands');
    Route::post('adminPanel/car-brand/update/{id}', 'CarBrandsController@update')->name('update-car-brands');
    Route::post('adminPanel/car-brand/delete/{id}', 'CarBrandsController@destroy')->name('delete-car-brands');

    /*Model Page*/
    Route::get('adminPanel/car-model', 'CarModelController@index')->name('car-model');
    Route::get('adminPanel/car-model/add', 'CarModelController@create')->name('add-car-model');
    Route::post('adminPanel/car-model/store', 'CarModelController@store')->name('store-car-model');
    Route::get('adminPanel/car-model/update/{id}', 'CarModelController@edit')->name('edit-car-model');
    Route::post('adminPanel/car-model/update/{id}', 'CarModelController@update')->name('update-car-model');
    Route::post('adminPanel/car-model/delete/{id}', 'CarModelController@destroy')->name('delete-car-model');

    /*Variant Page*/
    Route::get('adminPanel/car-variant','CarVariantController@index')->name('car-variant');
    Route::get('adminPanel/car-variant/add', 'CarVariantController@create')->name('add-car-variant');
    Route::post('adminPanel/car-variant/store', 'CarVariantController@store')->name('store-car-variant');
    Route::get('adminPanel/car-variant/update/{id}', 'CarVariantController@edit')->name('edit-car-variant');
    Route::post('adminPanel/car-variant/update/{id}', 'CarVariantController@update')->name('update-car-variant');
    Route::post('adminPanel/car-variant/delete/{id}', 'CarVariantController@destroy')->name('delete-car-variant');

    Route::get('getModel', 'CarVariantController@getModel');

});

Auth::routes(['verify' => true]);

Route::get('/home', 'Backend\BackendController@index')->name('home');
