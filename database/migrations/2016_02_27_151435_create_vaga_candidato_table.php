<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVagaCandidatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaga_candidato', function (Blueprint $table)
        {
            $table->increments('vag_cnd_id');
            $table->integer('vag_id')->unsigned();
            $table->integer('cnd_id')->unsigned();
            $table->integer('sto_id')->unsigned();
            $table->string('observacao', 200);

            $table->timestamps();
            $table->softDeletes();

            //
            
            $table->foreign('vag_id')->references('vag_id')->on('vaga');
            $table->foreign('cnd_id')->references('cnd_id')->on('candidato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vaga_candidato');
        Schema::drop('situacao_vag_cnd');
    }
}
