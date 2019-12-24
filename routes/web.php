<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('types', 'TypeController');
Route::resource('activities', 'ActivityController');
Route::resource('information', 'InformationController');
Route::resource('budget', 'BudgetController');
