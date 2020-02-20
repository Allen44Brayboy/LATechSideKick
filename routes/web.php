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

///////////////////////////////////Welcome Page
Route::get('/', function () {
    return view('welcome');
});
////////////////////////////////2 welcome Page
Route::get('/welcome', function () {
    return view('welcome');
});

//////////////////////////////Tap Page
Route::get('/Tap', function () {
    return view('Tap');
});

///////////////////////////////Modem Page
Route::get('/Modem', function () {
    return view('Modem');
});

/////////////////////////////////Trouble Shooting
Route::get('/TroubleShooting', function () {
    return view('TroubleShooting');
});

////////////////////////////////Tutorials
Route::get('/Tutorials', function () {
    return view('Tutorials');
});

///////////////////////////////Upstream Counter
Route::get('/US_Counter', function () {
    return view('US_Counter');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
