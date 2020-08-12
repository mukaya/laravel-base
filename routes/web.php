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
Route::view('a-propos', 'a-propos');
Route::view('contact', 'contact');

//clients
Route::get('clients','ClientsController@index');
Route::get('clients/create','ClientsController@create');
Route::post('clients', 'ClientsController@store');
Route::get('clients/{client}','ClientsController@show');
Route::get('clients/{client}/edit','ClientsController@edit');
Route::patch('clients/{client}','ClientsController@update');

