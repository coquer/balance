<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('types', 'TypeController');
Route::resource('activities', 'ActivityController');
Route::resource('information', 'InformationController');
Route::resource('budget', 'BudgetController');
Route::resource('tasks', 'TaskController');

Route::get('/test', 'ChartDataController@today');
