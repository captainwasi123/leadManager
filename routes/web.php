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
<<<<<<< HEAD
Route::get('/logout', 'authController@logout');
=======
Route::get('logout', 'authController@logout')->name('logout');
>>>>>>> ca55d1c71ac5f4d685f3246a3bbdf7db09b02cd0

//Admin

    Route::middleware('adminAuth')->prefix('admin')->namespace('admin')->group(function(){

        Route::get('/', 'adminController@index')->name('admin.dashboard');
        //Leads
        Route::prefix('leads')->group(function(){

<<<<<<< HEAD
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
=======
        Route::get('/', 'leadsController@index')->name('admin.leads');
        Route::get('/add', 'leadsController@add')->name('admin.leads.add');
        Route::post('/add', 'leadsController@addSubmit');
        Route::get('pending', 'leadsController@pendingLead')->name('admin.leads.pending');
        Route::get('mark/{id}', 'leadsController@markLead')->name('admin.leads.mark');
        Route::get('marked', 'leadsController@markedLead')->name('admin.leads.marked');
        Route::get('pegination', 'leadsController@pegination')->name('admin.leads.pegination');
        Route::get('filter', 'leadsController@filterLead')->name('admin.leads.filter');
        Route::post('filter', 'leadsController@filterLeadSubmit')->name('admin.leads.filter');


        Route::get('/details/{id}', 'leadsController@details');

        Route::get('/viewRemarks/{id}', 'leadsController@viewRemarks');
        Route::post('remarks', 'leadsController@viewRemarksSubmit')->name('admin.leads.response.remarks');
    });
    //Categories
    Route::prefix('categories')->group(function(){

        Route::get('/', 'settingController@categories')->name('admin.setting.categories');
        Route::post('/add', 'settingController@addCatogery')->name('admin.settings.categories.add');
        Route::get('edit/{id}', 'settingController@editCatogery')->name('admin.settings.categories.edit');

        Route::post('/update', 'settingController@updateCatogery')->name('admin.settings.categories.update');
        Route::get('/delete/{id}', 'settingController@deleteCategory')->name('admin.settings.categories.delete');

    });

    //Users
    Route::prefix('users')->group(function(){
        Route::get('/', 'userController@index')->name('admin.users.alluser');
        Route::get('/delete/{id}', 'userController@deleteUser')->name('admin.users.alluser.delete');
        Route::get('addnew', 'userController@addNew')->name('admin.users.addnew');
        Route::post('/add', 'userController@addnewSubmit')->name('admin.users.post');
        Route::get('edit/{id}', 'userController@editUser')->name('admin.users.updateuser');
        // Route::post('/edit',[UserController::class,'updateUser'])->name('admin.users.updateUser');
        Route::post('edit', 'userController@updateUser')->name('admin.users.updateUser');
>>>>>>> ca55d1c71ac5f4d685f3246a3bbdf7db09b02cd0
    });


//Agent1

    Route::middleware('agent1Auth')->prefix('agent1')->namespace('agent1')->group(function(){

        Route::get('/', 'agentController@index')->name('agent1.dashboard');
    });