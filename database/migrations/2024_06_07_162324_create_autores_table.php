<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoresTable extends Migration
{
    public function up()
    {
        Schema::create('autores', function (Blueprint $table) {
            $table->id('id_autor');
            $table->string('n_autor');
            $table->date('fecha_nac');
            $table->string('pais');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('autores');
    }
}
