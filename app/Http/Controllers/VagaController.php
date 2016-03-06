<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Candidato;
use Domain\Vaga;

class VagaController extends Controller
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
    }

    public function cadastrar()
    {
        $vagas = Vaga::orderBy('vag_id', 'DESC')->paginate(10);

        return view('vaga.cadastrar', compact('vagas'));
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
