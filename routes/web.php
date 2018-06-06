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

// profilna
Route::get('/profile', 'citateljController@profile');
Route::post('/profile', 'citateljController@updateAvatar');

Route::post('/createprofile/submit', 'CitateljController@registrirajProfil');

/*
Route::get('/category', function () {
    return view('kategorija');
});
*/
Route::get('/category', 'KorisnickaKategorijaController@home');
// ovaj dio


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Kategorija
Route::get('/favourites', 'KategorijaController@home');
Route::get('/readFavourites/{id}', 'KategorijaController@prikaziStripove');


// korisnicka kategorija
Route::get('/stvorikategoriju', function(){
  return view('/createKorKateg');
});
Route::post('/insertkorkategoriju', 'KorisnickaKategorijaController@stvoriKategoriju');
Route::get('/updateKorKateg/{id}', 'KorisnickaKategorijaController@updateKategoriju');
Route::post('/azurirajKorKateg/{id}', 'KorisnickaKategorijaController@azurirajKategoriju');
Route::get('/readKorKateg/{id}', 'KorisnickaKategorijaController@prikaziStripove');
Route::get('/deleteKorKateg/{id}', 'KorisnickaKategorijaController@makniKategoriju');
