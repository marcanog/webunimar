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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'home', 'as' => 'home'], function () {
    Route::get('/', 'HomeController@index');
    // Route::get('home', function () {return view('home');});
    /*  Route::post('/home', 'NewsController@shownews');*/
    /* Route::get('/home',function(){
         $news = App\News::all();

         foreach ($news as $new) {
             echo $new->modelo."<br/>";
         }
     });*/
});


Route::group(['prefix' => 'admin', 'as' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    //USERS
    Route::get('/users', 'UsersController@index');
    Route::post('/users', 'UsersController@store');
    Route::post('/users/update', 'UsersController@update');

    //NEWS
    Route::get('/news', 'NewsController@index');
    Route::get('/addnews', 'NewsController@addnews');

    Route::post('/addnews/upload', 'NewsController@upload');

    Route::post('/news', 'NewsController@store');
    Route::post('/news/update', 'NewsController@update');
    Route::post('/showtags', 'NewsController@showtags');

    //EVENTS
    Route::get('/events', 'EventsController@index');
    Route::post('/events', 'EventsController@store');
    Route::post('/events/update', 'EventsController@update');
    Route::post('/events/destroy', 'EventsController@destroy');


});

Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/home', 'AdminController@index');
    Route::get('admin/profile', 'UsersController@show');
    Route::post('/login', 'LoginController@login');
    // ->name('');
    // Route::get('admin/ajuda', 'AdminController@ajuda');
    //Employees
    Route::get('admin/employee/notifications', function () {
        return view('/employee/notifications');
    });
});

Route::get('navbar', function(){
    return view('navbar');
});

//Students
Route::get('admin/student/record', function () {
    return view('admin/student/record');
});


Route::get('ourinstitution', function () {
    return view('ourinstitution');
});

Route::get('newsunimar', function(){
    return view('newsunimar');
});

Route::get('eventsunimar', function(){
    return view('eventsunimar');
});

Route::get('orgstructure', function () {
    return view('orgstructure');
});

Route::get('organization', function () {
    return view('organization');
});

Route::get('simbology', function () {
    return view('simbology');
});

Route::get('ourhistory', function () {
    return view('ourhistory');
});

Route::get('deans', function () {
    return view('deans');
});

Route::get('offerstudy', function () {
    return view('studyoffers');
});

Route::get('regularstudents', function(){
    return view('regularstudents');
});

Route::get('newstudents', function(){
    return view('newstudents');
});

Route::get('alumni', function(){
    return view('alumni');
});
Route::get('vextension', function () {
    return view('vextension');
});

Route::get('agreements', function(){
    return view('agreements');
});

Route::get('vacademic', function () {
    return view('vacademic');
});

Route::get('comcurricula', function () {
    return view('comcurricula');
});

Route::get('estprepareds', function () {
    return view('estprepareds');
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

Route::get('pregrade', function () {
    return view('pregrade');
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

Route::get('rectorade', function(){
    return view('rectorade');
});

Route::get('generalsecretariat', function () {
    return view('generalsecretariat');
});

Route::get('controlstudies', function () {
    return view('controlstudies');
});

Route::get('regulations', function () {
    return view('regulations');
});

Route::get('offerstudy', function () {
    return view('studyoffers');
});

Route::get('healthystudent', function () {
    return view('healthystudent');
});

Route::get('healthymental', function () {
    return view('healthymental');
});

Route::get('calendaracademy', function () {
    return view('calendaracademy');
});

Route::get('payments', function () {
    return view('paymentsonline');
});

Route::get('services', function () {
    return view('servicesonline');
});

Route::get('contactus', function () {
    return view('contactus');
});

// languaje
Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

if (App::environment('production')) {
    URL::forceScheme('https');
}
if (env('APP_ENV') === 'production') {
    URL::forceSchema('https');
}


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
