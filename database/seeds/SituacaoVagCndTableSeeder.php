<?php

use Illuminate\Database\Seeder;

class SituacaoVagCndTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('situacao_vag_cnd')->insert( [ 
        	['ds_nome' => 'apto'],
        	['ds_nome' => 'inapto'],
        	['ds_nome' => 'pendente'],
         ] );
    }
}