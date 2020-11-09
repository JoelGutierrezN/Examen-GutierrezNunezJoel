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

Route::group(['prefix'=>'bd'], function(){
    Route::get('index', 'BDController@index');
    Route::get('detalle/{id}', 'BDController@detail');
    Route::get('crear', 'BDController@create');
    Route::post('store', 'BDController@store');
    Route::get('borrar/{id}', 'BDController@destroy');
    Route::get('editar', 'BDController@editar');
    Route::post('update', 'BDController@update');
});
