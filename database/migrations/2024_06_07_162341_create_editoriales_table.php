<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditorialesTable extends Migration
{
    public function up()
    {
        Schema::create('editoriales', function (Blueprint $table) {
            $table->id('id_editorial');
            $table->string('n_editorial');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('editoriales');
    }
}