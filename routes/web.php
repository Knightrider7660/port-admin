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

Route::group(['middleware' => 'auth'], function () {
    // admin panel home
    Route::get('/', 'MainController@index');

    //user update
    Route::post('update/information', 'MainController@update');
    //inner page
    Route::get('inner/dashboard/{id}', 'MainController@inner_view');
});
Auth::routes();
Route::get('logout', 'LogOutController@index');
Route::get('/home', 'HomeController@index')->name('home');
