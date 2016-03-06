<?php namespace Domain;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
	protected $table = 'candidato';
	protected $primaryKey = 'cnd_id';

	//
	
	/*public function getNomeCompleto()
	{
		return $this->ds_nome .' '. $this->attribute['ds_sobrenome'];
	}*/

    public function getDsNomeAttribute($value)
    {
        return $value;
    }

	public function vagas()
    {
        return $this->belongsToMany( Vaga::class, 'vaga_candidato', 'cnd_id', 'vag_id' )->withTimestamps()
        																				->withPivot('sto_id')
        																				->orderBy('vaga_candidato.created_at', 'desc');
    }

    public function vagaCandidatos()
    {
        return $this->hasMany( VagaCandidato::class, 'cnd_id');
    }

    public function situacaoVagCnd()
    {
    	return $this->belongsToMany( SituacaoVagCnd::class, 'vaga_candidato', 'cnd_id', 'sto_id' )->withTimestamps()
        																						  ->withPivot('sto_id');
    }
}