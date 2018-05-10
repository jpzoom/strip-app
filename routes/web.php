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
    return view('pocetna');
});

Route::get('/insertcomic', function () {
    return view('strip');
});

Route::get('/favourites', function () {
    return view('favorit');
});

Route::get('/profile', function () {
    return view('profil');
});

Route::get('/createprofile', function () {
    return view('stvoriprofil');
});

Route::post('/createprofile/submit', 'CitateljController@registrirajProfil');

Route::get('/category', function () {
    return view('kategorija');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
