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

Route::get('/insertcomic', function ($id,$nazivStripa) {
    return view('strip');
    function provjeriExstenziju();
    function prikaziStrip();
    function staviUKategoriju();
    function staviUKorKategoriju();
});

Route::get('/favourites', function () {
    return view('favorit');
});

Route::get('/profile', function ($id, $korisnickoIme, $email, $profilna, $lozinka) {
    return view('profil');
    echo 'Br.profila: ' .$id . '<br>'
    . 'Korisnik: ' .$korisnickoIme . '<br>'
      . 'email: " .$email . '<br>'; 
    
});

Route::get('/createprofile', function ($id, $korisnickoIme, $email, $profilna, $lozinka) {
    return view('stvoriprofil');
    function registrirajProfil();
    function logirajProfil();
    function azurirajProfil();
});

Route::post('/createprofile/submit', 'MessagesController@submit');

Route::get('/category', function ($id,$naziv,$opis) {
    return view('kategorija');
    function stvoriKategoriju();
    function prikaziStripove();
    function azurirajKategoriju();
    function makniKategoriju();
});
