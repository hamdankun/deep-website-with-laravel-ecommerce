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


//Route::group(['prefix' => 'product'], function($router) {
//    $router->get('/', 'ProductController@index');
//    $router->get('/create', 'ProductController@create');
//    $router->post('/', 'ProductController@store');
//    $router->get('/{id}/edit', 'ProductController@edit');
//});

Route::resource('product', 'ProductController');