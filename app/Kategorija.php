<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
  use Notifiable;

  protected $fillable = [
      'Naziv_kategorije',
  ];
}
