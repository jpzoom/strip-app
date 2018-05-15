<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KorisnickaKategorija extends Model
{
  use Notifiable;

  protected $fillable = [
      'Naziv_korisnicke_kategorije',
  ];
}
