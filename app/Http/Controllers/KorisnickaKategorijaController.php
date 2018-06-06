<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KorisnickaKategorija;

class KorisnickaKategorijaController extends Controller
{
    private $nazivKorisnickeKategorije = null;

    public function home(){
      $kategorije = KorisnickaKategorija::all();
      return view('kategorija', ['kategorije' => $kategorije]);
    }

    public function stvoriKategoriju(Request $request) {
      $this->validate($request, [
        'kategorija' => 'required'
      ]);
      $kategorije = new KorisnickaKategorija;
      $kategorije->Naziv_korisnicke_kategorije = $request->input('kategorija');
      $kategorije->save();
      return redirect('/category')->with('info', 'Korisnička kategorija je uspješno unesena!');
    }

    public function updateKategoriju($id) {
      $kategorije = KorisnickaKategorija::find($id);
      return view('/updateKorKateg', ['kategorije' => $kategorije]);
    }

    public function azurirajKategoriju(Request $request, $id) {
      $this->validate($request, ['kategorija' => 'required']);
      $data = array(
          'Naziv_korisnicke_kategorije' => $request->input('kategorija')
      );
      KorisnickaKategorija::where('id', $id)->update($data);
      return redirect('/category')->with('info', 'Korisnička kategorija je uspješno ažurirana!');
    }

    public function prikaziStripove($id) {
      $kategorije = KorisnickaKategorija::find($id);
      return view('/readKorKateg', ['kategorije' => $kategorije]);
    }

    public function makniKategoriju($id) {
      KorisnickaKategorija::where('id', $id)->delete();
      return redirect('/category')->with('info', 'Korisnička kategorija je uspješno izbrisana!');
    }

    public function makniStripove() {

    }
}
