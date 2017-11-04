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
    return view('welcome');
});

Route::resource('product', 'ProductController');

Route::get('/product-list', 'FrontendController@index');
Route::get('/product-list/{id}', 'FrontendController@show');
Route::get('/product-list/add-cart/{id}', 'FrontendController@addCart');
Route::post('/product-list/add-cart-with-qty/{id}', 'FrontendController@addCart');
Route::get('/shopping-cart', 'FrontendController@shoppingCart');
Route::get('/step-1', 'FrontendController@stepOne');
Route::get('/step-2', 'FrontendController@stepTwo');
Route::post('/step-2', 'FrontendController@postStepTwo');


