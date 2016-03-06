<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        config(['app.timezone' => 'America/Sao_Paulo']);

        $this->call('SituacaoVagCndTableSeeder');
        $this->call('VagaTableSeeder');

        factory(Domain\Candidato::class,50)->create();
        factory(Domain\VagaCandidato::class,300)->create();
    }
}