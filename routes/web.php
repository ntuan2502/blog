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

Route::post('/image/upload', 'ImageController@uploadImage')->name('');
Route::post('/image/delete', 'ImageController@deleteImage')->name('');

Route::get('/', function () {
    return view('index');
    // return redirect('/login');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@admin')->name('admin');

    Route::group(['prefix' => 'class'], function () {
        Route::get('/', 'AdminController@class')->name('class');
        Route::group(['prefix' => 'add'], function () {
            Route::get('/', 'AdminController@add_class')->name('class');
            Route::post('/', 'AdminController@add_classP')->name('class');
        });
        Route::group(['prefix' => '{id}/edit'], function () {
            Route::get('/', 'AdminController@edit_class')->name('class');
            Route::post('/', 'AdminController@edit_classP')->name('class');
        });
        Route::post('/delete', 'AdminController@delete_classP')->name('class');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'AdminController@category')->name('category');
        Route::group(['prefix' => 'add'], function () {
            Route::get('/', 'AdminController@add_category')->name('category');
            Route::post('/', 'AdminController@add_categoryP')->name('category');
        });
        Route::group(['prefix' => '{id}/edit'], function () {
            Route::get('/', 'AdminController@edit_category')->name('category');
            Route::post('/', 'AdminController@edit_categoryP')->name('category');
        });
        Route::post('/delete', 'AdminController@delete_categoryP')->name('category');
    });

    Route::group(['prefix' => 'post'], function () {
        Route::get('/', 'AdminController@post')->name('post');
        Route::group(['prefix' => 'add'], function () {
            Route::get('/', 'AdminController@add_post')->name('post');
            Route::post('/', 'AdminController@add_postP')->name('post');
        });
        Route::group(['prefix' => '{id}/edit'], function () {
            Route::get('/', 'AdminController@edit_post')->name('post');
            Route::post('/', 'AdminController@edit_postP')->name('post');
        });
        Route::post('/delete', 'AdminController@delete_postP')->name('post');
    });
});

Route::group(['prefix' => 'login'], function () {
    Route::get('/', 'HomeController@login')->name('login');
    Route::post('/', 'HomeController@loginP')->name('login');
});

Route::group(['prefix' => 'logout'], function () {
    Route::post('/', 'HomeController@logoutP')->name('logout');
});

Route::group(['prefix' => 'register'], function () {
    Route::get('/', 'HomeController@register')->name('register');
    Route::post('/', 'HomeController@registerP')->name('register');
});

Route::group(['prefix' => 'forgotPassword'], function () {
    Route::get('/', 'HomeController@forgotPassword')->name('forgotPassword');
    Route::post('/', 'HomeController@forgotPasswordP')->name('forgotPassword');
});
//Social Login
Route::group(['prefix' => 'auth'], function () {
    Route::group(['prefix' => '{provider}'], function () {
        Route::get('/', 'UserSocialController@redirectToProvider')->name('');
        Route::get('/callback', 'UserSocialController@handleProviderCallback')->name('');
    });
});
