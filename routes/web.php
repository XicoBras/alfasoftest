<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'ContactController@index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });


Route::get('/new_contact', 'ContactController@create')->name('new_contact');
Route::post('/new_contact_store', 'ContactController@store')->name('new_contact_store');
Route::get('/show_contact/{id}', 'ContactController@show')->name('show_contact');
Route::get('/edit_contact/{id}', 'ContactController@edit')->name('edit_contact');
Route::post('/contact_update', 'ContactController@update')->name('contact_update');
Route::get('/delete_contact/{id}', 'ContactController@destroy')->name('delete_contact');
