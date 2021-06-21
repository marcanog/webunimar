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

Route::get('/', function () {
    return view('welcome');
})->middleware('translate');

Route::get('home', function () {
    return view('home');
}); //->middleware('translate');

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
// 
Route::get('/lang/{language}', function ($language) {
    Session::put('language',$language);
    return redirect()->back();
})->name('language');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
