<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategorija; //Naziv_kategorije

class KategorijaController extends Controller
{
    public $nazivKategorije = null;

    public function home() {
      $favoriti = Kategorija::all();
      return view('favorit', ['favoriti' => $favoriti]);
    }

    public function prikaziStripove() {
      $favoriti = Kategorija::all();
      return view('favorit', ['favoriti' => $favoriti]);
    }

    public function makniStripove() {

    }
}
