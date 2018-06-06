<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KorisnickaKategorija extends Model
{

  protected $fillable = ['Naziv_korisnicke_kategorije',];
  protected $dates = ['stvoreno', 'azurirano'];

}
