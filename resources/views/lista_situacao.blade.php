<select class="form-control" name="sto_id">
	<option value="0">- Selecione -</option>
	@foreach($situacoes as $key => $situacao)
		
		<option value="{{ $situacao->sto_id }}">{{ $situacao->ds_nome }}</option>
		
	@endforeach
</select>