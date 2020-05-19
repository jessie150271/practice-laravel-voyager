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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('redirect', function ($id) {
    return redirect('index');
});

Route::get('/items', ['as'=>'items.index','uses'=>'ItemController@index']);
Route::get('/items/{id}', ['as'=>'items.show','uses'=>'ItemController@show']);
Route::post('/items', ['as'=>'items.store','uses'=>'ItemController@store']);
Route::put('/items/{id}', ['as'=>'items.update','uses'=>'ItemController@update']);
Route::delete('/items/{item}', ['as'=>'items.destroy','uses'=>'ItemController@destroy']);