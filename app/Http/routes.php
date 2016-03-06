<?php

$app->get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
$app->get('/pesquisar', ['as' => 'home', 'uses' => 'HomeController@pesquisar']);

#$app->post('/candidatos/buscar', ['as' => 'home', 'uses' => 'CandidatoController@buscar']);
$app->get('/candidato/cadastrar', ['as' => 'candidato_cadastrar' , 'uses' => 'CandidatoController@cadastrar']);
$app->get('/vaga/cadastrar', ['as' => 'vaga_cadastrar' , 'uses' => 'VagaController@cadastrar']);

$app->get('/1', function () use ($app) {
    
    #$obj = Domain\Candidato::find(3)->vagas()->orderBy('vag_cnd_id')->get( Array('vaga.vag_id', 'cnd_id', 'sto_id') );

    $t = Domain\Candidato::find(1)->vagas()->first()->situacaoVagCnd;

    #dd($t);

    #die;

    echo '<pre>';
    #print_r($obj->ToArray());
    print_r( $t->toArray() );
    echo '</pre>';

});
