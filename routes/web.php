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
    return view('pages.home');
});

Route::post('/language', [
	'Middleware' => 'LanguageSwitcher',
	'uses' => 'LanguageController@index',
]);

Route::get('/news', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('pages.app');
});

Route::get('/community', function () {
    return view('pages.app');
});

Route::get('/join-us', function () {
    return view('pages.join_us');
});
