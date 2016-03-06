<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function pesquisar(Request $request)
  {
    $queryModel = new \Domain\Candidato;
    $queryString = Array();

    if( $request->has('nr_cpf') )
    {
      $nrCPF = trim($request->input('nr_cpf'));

      if(strlen( $nrCPF ) > 0)
      {
        $queryString['nr_cpf'] = $nrCPF;

        $queryModel = $queryModel->where( 'candidato.nr_cpf', $request->input('nr_cpf') );
      }
    }

    //

    if( $request->has('cnd_ds_nome') )
    {
      $dsNome = strtolower( trim($request->input('cnd_ds_nome')) );

      if( strlen($dsNome) > 0 )
      {
        $queryString['cnd_ds_nome'] = $dsNome;

        $queryModel = $queryModel->whereRaw( "lower(candidato.ds_nome) like '%" .$dsNome."%'" )
                                 ->orWhereRaw( "lower(candidato.ds_sobrenome) like '%" .$dsNome."%'" );
      }
    }

    //
    
    if( $request->has('vag_id') )
    {
      if( $request->input('vag_id') > 0 )
      {
        $vagId = $request->input('vag_id');
        $queryString['vag_id'] = $vagId;

        $queryModel = $queryModel->whereHas('vagaCandidatos', function($query) use ($vagId) { $query->where('vaga_candidato.vag_id', $vagId); });
        #$queryModel = $queryModel->with(['vagaCandidatos' => function($query) use ($vagId) { $query->where('vaga_candidato.vag_id', $vagId); }]);
      }
    }

    //

    if( $request->has('sto_id') )
    {
      if( $request->input('sto_id') > 0 )
      {echo 'A';
        $stoId = $request->input('sto_id');
        $queryString['stoId'] = $stoId;

        $queryModel = $queryModel->whereHas('vagaCandidatos', function($query) use ($stoId) { $query->where('vaga_candidato.sto_id', $stoId); });
        #$queryModel = $queryModel->with(['vagaCandidatos' => function($query) use ($stoId) { $query->where('vaga_candidato.sto_id', $stoId); }]);
      }
    }


    $candidatos = $queryModel->paginate(10);
    #$candidatos = $queryModel->get();
    #$candidatos = $queryModel->toSql();
    $candidatos->appends( $queryString );

    /*echo '<pre>';
    print_r( $candidatos->toArray() );
    echo '</pre>';
    die;*/

    //

    $vagas = \Domain\Vaga::orderBy('ds_nome')->get();

    $situacoes = \Domain\SituacaoVagCnd::orderBy('ds_nome')->get();

    return view('index', compact('candidatos', 'vagas', 'situacoes'));
  }

  public function index()
  {
    $candidatos = \Domain\Candidato::with(['vagaCandidatos.situacaoVagCnd',
                                           'vagaCandidatos.vaga',
                                           'vagaCandidatos' => function($query){ $query->orderBy('vaga_candidato.created_at', 'DESC'); }
                                         ])
                                      ->orderBy('created_at', 'DESC')
                                      ->paginate(10);

      $vagas = \Domain\Vaga::orderBy('ds_nome')->get();

      $situacoes = \Domain\SituacaoVagCnd::orderBy('ds_nome')->get();

      return view('index', compact('candidatos', 'vagas', 'situacoes'));
  }
}
