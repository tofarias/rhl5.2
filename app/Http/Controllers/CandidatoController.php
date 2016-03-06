<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Candidato;
use Domain\Vaga;

class CandidatoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $candidatos = Candidato::all();

        return view('index', compact('candidatos'));
    }

    public function cadastrar()
    {
        $vagas = Vaga::orderBy('ds_nome')->get();

        return view('candidato.cadastrar', compact('vagas'));
    }

    public function buscar(Request $request)
    {
        $candidato = new Candidato;

        $resultado = null;
        if( $request->has('cpf_cnd') )
        {
            $criteria = $candidato->where('nr_cpf', $request->input('cpf_cnd') );
        }

        if( isset($criteria) )
        {
            $resultado = $criteria->get();
        }

        

        return view('index', compact('resultado'));
    }
}
