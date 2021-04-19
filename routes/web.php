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
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::prefix('admin')->group(function(){
    Route::get('/users', 'UserController@index')->name('user.list');
    Route::get('/tasks', 'TaskController@index')->name('tasks.list');
    Route::get('/tasks/new', 'TaskController@create');
    Route::post('/tasks/save', 'TaskController@store')->name('admin.task.save');
    Route::delete('/tasks/delete/{id}', 'TaskController@delete')->name('admin.task.delete');
});
