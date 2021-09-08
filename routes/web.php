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

Route::get('/', 'authController@index');
Route::get('/signin', 'authController@signin');
Route::post('/signin', 'authController@signinSubmit');

//Middleware

Route::middleware('adminAuth')->prefix('admin')->namespace('admin')->group(function(){

    Route::get('/', 'adminController@index')->name('admin.dashboard');
    //Leads
    Route::prefix('leads')->group(function(){

        Route::get('/', 'leadsController@index')->name('admin.leads');
        Route::get('/add', 'leadsController@add')->name('admin.leads.add');
        Route::post('/add', 'leadsController@addSubmit');

        Route::get('/details/{id}', 'leadsController@details');
    });
});