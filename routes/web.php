<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Tour\IndexController@index')->name('welcome');
Route::get('/admin/', 'Admin\IndexController@index')->name('admin.index');
Route::get('/admin/round/new', 'Admin\RoundController@add')->name('admin.newRound');
