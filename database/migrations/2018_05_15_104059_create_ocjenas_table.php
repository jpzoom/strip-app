<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcjenasTable extends Migration
{

    public function up() {
        Schema::create('ocjenas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('Vrijednost_ocjene');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('ocjenas');
    }
}
