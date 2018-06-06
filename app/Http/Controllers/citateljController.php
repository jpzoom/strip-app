<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class citateljController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function registriranjeProfila() {
        
    }

    public function logiranjeProfila() {
      
    }

    public function azuriranjeProfila() {
        
    }

    public function profile() {
      return view('profile', array('user' => Auth::user()));
    }

    public function updateAvatar(Request $request) {
      if ($request -> hasFile('avatar')) {
        $avatar = $request->file('avatar');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->fit(300,300)->save(public_path("images\avatars\\".$filename));

        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
    }
    return view('profile', array('user' => Auth::user()));
}
}
