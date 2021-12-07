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
Route::get('logout', 'authController@logout')->name('logout');

//Middleware

Route::middleware('adminAuth')->prefix('admin')->namespace('admin')->group(function(){

    Route::get('/', 'adminController@index')->name('admin.dashboard');
    //Leads
    Route::prefix('leads')->group(function(){

        Route::get('/', 'leadsController@index')->name('admin.leads');
        Route::get('/add', 'leadsController@add')->name('admin.leads.add');
        Route::post('/add', 'leadsController@addSubmit');
        Route::get('pending', 'leadsController@pendingLead')->name('admin.leads.pending');
        Route::get('mark/{id}', 'leadsController@markLead')->name('admin.leads.mark');
        Route::get('marked', 'leadsController@markedLead')->name('admin.leads.marked');
        Route::get('pegination', 'leadsController@pegination')->name('admin.leads.pegination');

        Route::get('/details/{id}', 'leadsController@details');
    });
    //Categories
    Route::prefix('categories')->group(function(){

        Route::get('/', 'settingController@categories')->name('admin.setting.categories');
        Route::post('/add', 'settingController@addCatogery')->name('admin.settings.categories.add');
        Route::get('edit/{id}', 'settingController@editCatogery')->name('admin.settings.categories.edit');

        Route::post('/update', 'settingController@updateCatogery')->name('admin.settings.categories.update');
        Route::get('/delete/{id}', 'settingController@deleteCategory')->name('admin.settings.categories.delete');

    });
});