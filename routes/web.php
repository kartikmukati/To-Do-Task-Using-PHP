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

Route::get('/', 'UserController@getIndex');


Route::get('/register', 'UserController@getRegister');

Route::post('/register', 'UserController@register');

Route::post('/login', 'UserController@login');

Route::get('/logout/{userId}','UserController@logout');

Route::get('/admin', 'AdminController@getUsers');

Route::get('/admin/getTask/{userId}', 'AdminController@getTaskPage');

Route::post('/admin/postTask/{userId}', 'AdminController@postTask');

Route::get('/login', function(){
    return view('pages/pagenotfound');
});

