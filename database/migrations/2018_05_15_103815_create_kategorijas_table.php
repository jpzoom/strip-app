<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategorijasTable extends Migration
{

    public function up() {
        Schema::create('kategorijas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Naziv_kategorije');
            $table->timestamps();
        });

        DB::table('kategorijas')->insert(
            array(
                'Naziv_kategorije' => 'Favoriti korisnika',
            )
        );
    }

    public function down() {
        Schema::dropIfExists('kategorijas');
    }
}
