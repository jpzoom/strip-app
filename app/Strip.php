<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strip extends Model
{
  use Notifiable;

  protected $fillable = [
      'Naziv_stripa',
  ];
}
