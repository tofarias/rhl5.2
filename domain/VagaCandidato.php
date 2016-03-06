<?php namespace Domain;

use Illuminate\Database\Eloquent\Model;

class VagaCandidato extends Model
{
	protected $table = 'vaga_candidato';
	protected $primaryKey = 'vag_cnd_id';

	public function situacaoVagCnd()
    {
        return $this->belongsTo( SituacaoVagCnd::class, 'sto_id');
    }

    public function vaga()
    {
        return $this->belongsTo( Vaga::class, 'vag_id');
    }
}