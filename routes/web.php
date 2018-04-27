<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
	return view('layout.master');
});

Route::resource('/admission','admissionController');

Route::group(['middleware'=>'auth'],function(){


    Route::resource('/student','StudentController');
    Route::POST('/student/search/','StudentController@search');

    Route::resource('/subject','subjectController');

    Route::resource('/teachers','teachersController');

    Route::resource('/mark','markController');
    Route::get('/mark/new/{id}','markController@marks');
    Route::get('/marksheet/{sid?}/{exam?}/{year?}','markController@marksheet');

    Route::resource('/exam','examController');

    Route::resource('/attendence','attendenceController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
