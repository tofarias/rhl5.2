<?php

use Illuminate\Database\Seeder;
use Domain\Vaga;

class VagaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vaga::insert([
        	['ds_nome' => 'desenvolvedor .net'],
            ['ds_nome' => 'professor assistente'],
        	['ds_nome' => 'desenvolvedor java'],
        	['ds_nome' => 'desenvolvedor php'],
            ['ds_nome' => 'desenvolvedor android'],
            ['ds_nome' => 'analista de sistemas'],
            ['ds_nome' => 'analista de negocios'],
            ['ds_nome' => 'arquiteto java'],
            ['ds_nome' => 'supervisor técnico'],
            ['ds_nome' => 'professor de programação'],
            ['ds_nome' => 'engenheiro de software'],
            ['ds_nome' => 'web designer'],
            ['ds_nome' => 'técnico em informática'],
            ['ds_nome' => 'analista de requisitos'],
            ['ds_nome' => 'recepcionista'],
            ['ds_nome' => 'assistente financeiro'],
            ['ds_nome' => 'supervisor de cobrança'],
         ] );
    }
}