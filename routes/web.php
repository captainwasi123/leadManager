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
Route::get('/logout', 'authController@logout');

//Admin

    Route::middleware('adminAuth')->prefix('admin')->namespace('admin')->group(function(){

        Route::get('/', 'adminController@index')->name('admin.dashboard');
        //Leads
        Route::prefix('leads')->group(function(){

            Route::get('/', 'leadsController@index')->name('admin.leads');
            Route::get('/add', 'leadsController@add')->name('admin.leads.add');
            Route::post('/add', 'leadsController@addSubmit');

            Route::get('/details/{id}', 'leadsController@details');
        });

        //Users
        Route::prefix('users')->group(function(){

            Route::get('/', 'userController@index')->name('admin.users');
            Route::get('/add', 'userController@add')->name('admin.users.add');
            Route::post('/add', 'userController@addSubmit');
        });
    });


//Agent1

    Route::middleware('agent1Auth')->prefix('agent1')->namespace('agent1')->group(function(){

        Route::get('/', 'agentController@index')->name('agent1.dashboard');
    });