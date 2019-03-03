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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/colect','colecaoController@index')->name('colect.index');
Route::get('/colect/create','colecaoController@create');
route::post('/colect/create', 'colecaoController@store')->name('colect.store');
Route::get('/colect/destroy/{id}','colecaoController@destroy');
route::get('/colect/edit/{id}', 'colecaoController@edit')->name('colect.edit');
route::post('/colect/edit/{id}', 'colecaoController@update')->name('colect.update');

