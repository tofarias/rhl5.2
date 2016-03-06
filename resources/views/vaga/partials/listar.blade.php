<select class="form-control" name="vag_id">
	<option value="0">- Selecione -</option>
	@foreach($vagas as $key => $vaga)
		
		<option value="{{ $vaga->vag_id }}">{{ $vaga->ds_nome }}</option>
		
	@endforeach
</select>