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

// Route::get('about','AboutController@index');

Route::get('todos','TodosController@index')->name('todos.index');
Route::get('todos/create', 'TodosController@create')->name('todos.create');
Route::post('todos/create','TodosController@store')->name('todos.store');
Route::get('todos/edit/{id}','TodosController@edit')->name('todos.edit');
Route::post('todos/edit/{id}','TodosController@update')->name('todos.update');
Route::get('todos/delete/{id}','TodosController@delete')->name('todos.delete');