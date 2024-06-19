<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id('id_libro');
            $table->string('titulo');
            $table->integer('annio');
            $table->foreignId('id_autor')->constrained('autores', 'id_autor')->onDelete('cascade');
            $table->foreignId('id_editorial')->constrained('editoriales', 'id_editorial')->onDelete('cascade');
            $table->date('publicacion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('libros');
    }
}

