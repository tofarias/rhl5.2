<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSituacaoVagCndTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situacao_vag_cnd', function (Blueprint $table)
        {
            $table->increments('sto_id');
            $table->string('ds_nome', 50);

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('vaga_candidato', function ($table)
        {
            $table->foreign('sto_id')->references('sto_id')->on('situacao_vag_cnd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        #Schema::drop('situacao_vag_cnd');
    }
}
