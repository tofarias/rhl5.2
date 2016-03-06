<?php namespace Domain;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
	protected $table = 'vaga';
	protected $primaryKey = 'vag_id';

	//

	public function candidatos()
	{
		return $this->belongsToMany( Candidato::class, 'vaga_candidato', 'vag_id', 'cnd_id' )->withTimestamps()->withPivot('created_at');
	}

	public function situacaoVagCnd()
    {
    	return $this->belongsToMany( SituacaoVagCnd::class, 'vaga_candidato', 'vag_id', 'sto_id' )->withTimestamps()
        																						  ->withPivot('sto_id');
    }

    public function vagaCandidato()
    {
        return $this->hasMany( VagaCandidato::class, 'vag_id');
    }
}