<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartas', function (Blueprint $table) {
            $table->increments('id');
         $table->string('nombre');
          $table->integer('clase');
          $table->integer('tipo');
          $table->integer('coste');
         $table->integer('ataque');
          $table->integer('vida');
          $table->integer('rareza');
          $table->integer('expansion');
          $table->longtext('imagen');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartas');
    }
}
