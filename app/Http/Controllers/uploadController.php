<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function index(){
        return view('strip');
    }
    public function store(Request $request){

        $file = $request->file('fileUp');
        $file -> store('zaStrip', 'public');
        return back();
      }
}
