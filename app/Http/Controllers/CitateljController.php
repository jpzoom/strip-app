<?php


namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class CitateljController extends Controller
{
/*
    public function registrirajProfil(Request $request) {
      $this -> validate ($request, ["Korisničko ime" => 'required|string|max:255',
                                    "Email" => 'required|string|email|max:255',
                                    "Lozinka" => 'required|string|min:6|confirmed']);

                                    return "Success";
    }
*/

use RegistersUsers;

protected $redirectTo = '/home';

public function __construct() { // new controller instance
    $this->middleware('guest');
}

protected function validator(array $data) { // validacija
    return Validator::make($data, [
        'Korisničko ime' => 'required|string|max:255',
        'Email' => 'required|string|email|max:255|unique:users',
        'Lozinka' => 'required|string|min:8|confirmed',
    ]);
}

protected function create(array $data) { // nakon validne registracije stvara novu instancu korisnika
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);
}
}
