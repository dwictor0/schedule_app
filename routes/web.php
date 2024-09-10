<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/activity/register/', 'App\Http\Controllers\activitiesController@create')->name('create_activity');
Route::post('/activity/register/', 'App\Http\Controllers\activitiesController@store')->name('register_activity');


Route::get('/activities/edit/{id}', 'App\Http\Controllers\activitiesController@edit')->name('edite');
Route::post('/activities/edit/{id}', 'App\Http\Controllers\activitiesController@update')->name('edit_activity');

Route::get('/activities/delete/{id}', 'App\Http\Controllers\activitiesController@delete')->name('delet');
Route::post('/activities/delete/{id}','App\Http\Controllers\activitiesController@destroy')->name('destroy_activity');

Route::get('/activities/', 'App\Http\Controllers\activitiesController@index');


