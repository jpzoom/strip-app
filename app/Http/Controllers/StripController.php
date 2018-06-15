<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use Zipper;

class StripController extends Controller
{
    public $nazivStripa = null;

    public function prikaziStrip() {
        if(ISSET($_FILES['zip'])){
        $errors = array();
        $datoteka = $_FILES['zip']['name'];
        $tmp = $_FILES['zip']['tmp_name'];
        $varijabla = explode('.', $datoteka);
        $zip = new ZipArchive;

        if (strtolower(end($varijabla) != 'zip')){
            $errors[] = 'Nije zip';
        }
        if ($zip -> open($tmp) === false) {
            $errors[] = 'Nece otvorit';
        }

        if (empty($errors)) {
            // Zipper::make($zip) -> extractTo('zaStripwww');
            $zip -> extractTo('zaStripwe');
            $zip -> close();
            return back();
        }

    }
    }

    public function staviUKategoriju() {

    }

    public function staviUKorisnickuKategoriju() {

    }

    public function provjeriEkstenziju() {

    }
}
