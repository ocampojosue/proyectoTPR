<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/config', 'UserController@config')->name('config');

Route::get('/category', 'CategoryController@indexcat')->name('indexcat');
Route::post('/category', 'CategoryController@store')->name('category.store');

Route::get('/provider', 'ProviderController@indexprov')->name('indexprov');
Route::post('/provider', 'ProviderController@store')->name('provider.store');
Route::post('/config','UserController@update')->name('user.update');