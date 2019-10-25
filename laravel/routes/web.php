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


Route::get('/students', 'Admins\StudentsController@index');
Route::get('/students/create', 'Admins\StudnetsController@create');
Route::get('/students/{id}/edit', 'Admins\StudentsController@edit');
Route::get('/students/{id}/delete', 'Admins\StudentsController@delete');

Route::get('/main', function (){
    return view('sbadmins.layouts.main');
});

Route::post('/students', 'Admin\StudnetsController@store');
Route::post('/students/{id}', 'Admin\StudnetsController@update');
Route::post('/students/{id}/delete', 'Admin\StudnetsController@destroy');
