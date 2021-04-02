<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sorteios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dataSorteio');
            $table->bigInteger('numero_animal_sorteado_id')->unsigned();
            $table->foreign('numero_animal_sorteado_id')->references('id')->on('valores_animais');
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
