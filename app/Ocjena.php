<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocjena extends Model
{
  use Notifiable;

  protected $fillable = [
      'Vrijednost_ocjene',
  ];
}
