<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadidatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato', function (Blueprint $table)
        {            
            $table->increments('cnd_id');
            $table->string('nr_cpf', 20)->unique();
            $table->string('ds_nome', 50);
            $table->string('ds_sobrenome', 50);
            $table->date('dt_nascimento', 50);
            $table->string('cep', 20);
            $table->string('rua', 45);
            $table->string('complemento', 45);
            $table->string('bairro', 20);
            $table->string('uf', 3);
            $table->string('cidade', 50);
            $table->string('telefone1', 20);
            $table->string('telefone2', 20);
            $table->string('email1', 50);
            $table->string('email2', 50);
            $table->tinyInteger('sexo_masculino');
            $table->string('observacao', 200);
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('candidato');
    }
}
