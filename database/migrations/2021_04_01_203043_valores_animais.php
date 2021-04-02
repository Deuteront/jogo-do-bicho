<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ValoresAnimais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valores_animais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numero_para_sorteio');
            $table->bigInteger('codigo_animal_id')->unsigned();
            $table->foreign('codigo_animal_id')->references('id')->on('animais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
