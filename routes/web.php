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

Route::get('/admin', 'AdminController@index')->name('index');

Route::get('/login', 'HomeController@login')->name('login');
Route::post('/login', 'HomeController@loginP')->name('login');

Route::post('/logout', 'HomeController@logoutP')->name('logout');

Route::get('/register', 'HomeController@register')->name('register');
Route::post('/register', 'HomeController@registerP')->name('register');

Route::get('/forgotPassword', 'HomeController@forgotPassword')->name('forgotPassword');
Route::post('/forgotPassword', 'HomeController@forgotPasswordP')->name('forgotPassword');
