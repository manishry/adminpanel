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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/charts', 'HomeController@charts')->name('charts');
Route::get('/widgets', 'HomeController@widgets')->name('widgets');
Route::get('/tables', 'HomeController@tables')->name('tables');
Route::get('/fullwidth', 'HomeController@fullwidth')->name('fullwidth');
Route::get('/forms', 'HomeController@forms')->name('forms');
Route::get('/buttons', 'HomeController@buttons')->name('buttons');
Route::get('/icons', 'HomeController@icons')->name('icons');
Route::get('/addons', 'HomeController@addons')->name('addons');
Route::get('/elements', 'HomeController@elements')->name('elements');
Route::get('/authentication', 'HomeController@authentication')->name('authentication');
Route::get('/form/wizard', 'HomeController@forms_wizard')->name('forms_wizard');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/calendar', 'HomeController@calendar')->name('calendar');
Route::get('/chat', 'HomeController@chat')->name('chat');
Route::get('/logins', 'HomeController@logins')->name('logins');
