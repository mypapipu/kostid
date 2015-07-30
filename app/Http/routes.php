<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', 'WelcomeController@index');
//Route::any('/api', 'WelcomeController@api');
Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::group(['prefix' => 'api'], function() {
    Route::get('city', 'CityController@index');
    Route::get('city/{id}', 'CityController@show');
 
    Route::get('type', 'TypeController@index');
    Route::get('type/{id}', 'TypeController@show');

    Route::get('product', 'ProductController@index');
    Route::get('product/{id}', 'ProductController@show');

    Route::get('member', 'MemberController@index');
    Route::get('member/{id}', 'MemberController@show');

    Route::get('transaction', 'TransactionController@index');
    Route::get('transaction/{id}', 'TransactionController@show');
});
