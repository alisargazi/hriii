<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => 'web'], function () {
    
    Route::get('/','LoginController@index');
    Route::get('/login', 'LoginController@authen');
    Route::get('/logout', 'LoginController@logout');
    Route::any('/checkAuth', 'LoginController@checkAuth');

    Route::get('/dashboard', 'DashboardController@index');
    
    Route::group(['prefix' => 'employee'], function () {
        Route::any('/profile','EmployeeController@profile');
        Route::any('/insert_em','EmployeeController@insert');
        Route::any('/update_em','EmployeeController@update');
        Route::any('/delete_em','EmployeeController@delete');
        Route::get('/list','EmployeeController@employee_list');
    });
    
    Route::group(['prefix' => 'customer'], function () {
       Route::any('/detail','CustomerController@detail');
       Route::get('/list','CustomerController@customer_list');
       Route::any('/add','CustomerController@insert');
       Route::get('/reg','CustomerController@reg');
       
    });
    
    
});
