<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKorisnickaKategorijasTable extends Migration
{

    public function up() {
        Schema::create('korisnicka_kategorijas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Naziv_korisnicke_kategorije');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('korisnicka_kategorijas');
    }
}
