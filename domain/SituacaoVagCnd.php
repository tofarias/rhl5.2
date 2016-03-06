<?php namespace Domain;

use Illuminate\Database\Eloquent\Model;

class SituacaoVagCnd extends Model
{
	protected $table = 'situacao_vag_cnd';
	protected $primaryKey = 'sto_id';

	public function VagaCandidato()
    {
        return $this->belongsTo( VagaCandidato::class, 'sto_id');
    }
}