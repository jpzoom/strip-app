<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStripsTable extends Migration
{

    public function up() {
        Schema::create('strips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Naziv_stripa');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('strips');
    }
}
