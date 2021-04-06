<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Palpite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palpites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('codigo_animal_id')->unsigned();
            $table->bigInteger('jogador_id')->unsigned();
            $table->bigInteger('sorteio_id')->nullable()->unsigned();
            $table->foreign('sorteio_id')->references('id')->on('sorteios');
            $table->foreign('jogador_id')->references('id')->on('jogadores');
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
