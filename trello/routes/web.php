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
})->name('blade');

Auth::routes();


Route::get('/project', 'ProjectController@index')->name('projecthome');
Route::resource('/main', 'MethodController');
Route::delete('/projecthome/main2/destroy2', 'MethodController@destroyuser')->name('destroyuser');
Route::resource('/card', 'JobController');
Route::resource('/chart', 'ChartController');
Route::resource('/backlog', 'BacklogController');
Route::resource('/help', 'HelpController');
Route::resource('/done', 'DoneController');
Route::resource('/notdone', 'IncompleteController');
Route::resource('/projecthome', 'ProjecthomeController');
Route::resource('/calendar', 'CalendarController');
