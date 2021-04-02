<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ganhadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ganhadores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('valor_ganho');
            $table->bigInteger('jogador_id')->unsigned();
            $table->foreign('jogador_id')->references('id')->on('jogadores');
            $table->bigInteger('sorteio_id')->unsigned();
            $table->foreign('sorteio_id')->references('id')->on('sorteios');
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
