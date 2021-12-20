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
Route::get('logout', 'authController@logout')->name('logout');

//Admin

    Route::middleware('adminAuth')->prefix('admin')->namespace('admin')->group(function(){

        Route::get('/', 'adminController@index')->name('admin.dashboard');

        Route::prefix('leads')->group(function(){
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
        });

    });

//Agent1

    Route::middleware('agent1Auth')->prefix('agent1')->namespace('agent1')->group(function(){

        Route::get('/', 'agentController@index')->name('agent1.leads.dashboard');

        Route::prefix('leads')->group(function(){
            Route::get('/details/{id}', 'leadsController@details');
            Route::get('add', 'leadsController@addLead')->name('agent1.leads.add');
            Route::post('/add', 'leadsController@addleadSubmit');
            Route::get('pending', 'leadsController@agent1pendingLead')->name('agent1.leads.pending');
            Route::get('/viewRemarks/{id}', 'leadsController@viewRemarks');
            Route::post('remarks', 'leadsController@viewRemarksSubmit')->name('agent1.leads.response.remarks');
            Route::get('import', 'leadsController@importLead')->name('agent1.leads.import');
            Route::post('importLead', 'leadsController@importedLead')->name('agentImport');

        });
    });



//Agent2

    Route::middleware('agent2Auth')->prefix('agent2')->namespace('agent2')->group(function(){

        Route::get('/', 'agentController@index')->name('agent2.leads.dashboard');

        Route::prefix('leads')->group(function(){
            Route::get('/details/{id}', 'leadsController@details');
            Route::get('pending', 'leadsController@agent2pendingLead')->name('agent2.leads.pending');
            Route::get('/viewRemarks/{id}', 'leadsController@viewRemarks');
            Route::post('remarks', 'leadsController@viewRemarksSubmit')->name('agent2.leads.response.remarks');
            Route::get('marked', 'leadsController@markedLead')->name('agent2.leads.marked');
            Route::get('mark/{id}', 'leadsController@markLead')->name('agent2.leads.mark');


        });
    });