<?php

use Illuminate\Support\Facades\Auth;
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
Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'HomeController@index');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});
Route::prefix('admin')->group(function(){
    Route::get('/users', 'UserController@index');
    Route::get('/tasks', 'TaskController@index');
    Route::get('/tasks/new', 'TaskController@create');
    Route::post('/tasks/save', 'TaskController@store');


    Route::get('/tasks/{id}', 'TaskController@edit');
});
