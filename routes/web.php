<?php

use Illuminate\Support\Facades\Route;
use\App\Http\Controllers\programmecontroller; 
use\App\Http\Controllers\TasksController;  


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

Route::get('/','App\Http\Controllers\HomeController@index')->name('home');
 

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard','App\Http\Controllers\TasksController@index')->name('dashboard');

    Route::resource('tasks', \App\Http\Controllers\TasksController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);

    Route::resource('roles', \App\Http\Controllers\RoleController::class);

});

Route::get('getpost/{id}', 'App\Http\Controllers\HomeController@getpost')->name('getpost');
Route::resource('programme',programmecontroller::class);
