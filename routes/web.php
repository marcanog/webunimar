<?php

use Illuminate\Support\Facades\App;
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
//App::setLocale("en");

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'home', 'as' => 'home'], function(){
    Route::get('/', function () {return view('home');});
    // Route::get('home', function () {return view('home');});
});

Route::group(['prefix' => 'admin', 'as' => 'admin'], function(){
    Route::get('/', 'AdminController@index');
    Route::get('/news', 'NewsController@index');
    Route::get('/events', 'EventsController@index');
    Route::get('/users', 'UsersController@index');
    Route::post('/users', 'UsersController@store');

    Route::resource('users', 'UsersController');
});


Route::group( ['middleware' => 'auth' ], function(){
    Route::get('admin/home', 'AdminController@index');
    Route::get('admin/profile', function(){
        return view ('admin/profile');
    });
    // Route::get('admin/ajuda', 'AdminController@ajuda');
});


Route::get('ourinstitution', function () {
    return view('ourinstitution');
});

Route::get('organization', function () {
    return view('organization');
});

Route::get('deans', function () {
    return view('deans');
});

Route::get('vextension', function () {
    return view('vextension');
});

Route::get('vacademic', function () {
    return view('vacademic');
});

Route::get('cssocecon', function () {
    return view('deancssoc');
});

Route::get('csjurpol', function () {
    return view('deancsjurpol');
});

Route::get('genestud', function () {
    return view('deangenestudies');
});

Route::get('dptoinvest', function () {
    return view('dptoinvestigation');
});

Route::get('postgrade', function () {
    return view('dptopostgrade');
});

Route::get('engineerie', function () {
    return view('deaneng');
});

Route::get('vicerectorades', function () {
    return view('vicerectorades');
});

Route::get('humarte', function () {
    return view('deanhumarte');
});

Route::get('regulations', function () {
    return view('regulations');
});

// languaje
Route::get('lang/{locale}', function ($locale){
    session()->put('locale', $locale);
    return redirect()->back();
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
