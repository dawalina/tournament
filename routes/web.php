<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Tour\IndexController@index')->name('welcome');
Route::get('/admin/', 'Admin\IndexController@index')->name('admin.index');
Route::get('/admin/team/new', 'Admin\TeamController@add')->name('admin.newTeam');
Route::post('/admin/team/new', 'Admin\TeamController@add')->name('admin.newTeam');
Route::get('/admin/match/new', 'Admin\MatchController@add')->name('admin.newMatch');
Route::post('/admin/match/new', 'Admin\MatchController@add')->name('admin.newMatch');