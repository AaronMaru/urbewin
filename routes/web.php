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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('pages.home');
});

// Route::post('/language', [
//  'Middleware' => 'LanguageSwitcher',
//  'uses' => 'LanguageController@index',
// ]);


Route::group([
    'middleware' => ['auth']
], function () {
    Route::resource('/news','NewsController');
});

Route::get('/news', 'NewsController@index');
Route::get('/news/{news}', 'NewsController@show');

Route::get('/app', function () {
    return view('pages.app');
});

Route::get('/community', function () {
    return view('pages.community');
});

Route::get('/join-us', function () {
    return view('pages.join_us');
});

Route::post('/language', function(Request $request) {
    $lang = $request->get('locale', 'en');
    Session::put('locale', $lang);
    return Redirect::back();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
