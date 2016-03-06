<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

#use Domain\Candidato;

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define(Domain\Candidato::class, function (Faker\Generator $faker) {
    return [
        'nr_cpf' => $faker->ean8,
        'ds_nome' => $faker->firstName,
        'ds_sobrenome' => $faker->lastName,
        'dt_nascimento' => $faker->date, // '1979-06-09',
        'cep' => $faker->postcode,
        'rua' => $faker->streetName,
        'complemento' => $faker->buildingNumber,
        'bairro' => $faker->citySuffix,
        'uf' => $faker->stateAbbr,
        'cidade' => $faker->cityPrefix,
        'telefone1' => $faker->phoneNumber,
        'telefone2' => $faker->phoneNumber,
        'email1' => $faker->email,
        'email2' => $faker->freeEmail,
        'sexo_masculino' => $faker->boolean,
        'observacao' =>  $faker->text
    ];
});

$factory->define(Domain\VagaCandidato::class, function (Faker\Generator $faker) {
    return [
        
        'vag_id' => $faker->numberBetween($min = 1, $max = 17),
        'cnd_id' => $faker->numberBetween($min = 1, $max = 50),
        'sto_id' => $faker->numberBetween($min = 1, $max = 3),
        'created_at' => $faker->dateTimeBetween('-3 years', $endDate = 'now') // DateTime('2003-03-15 02:00:49')
    ];
});