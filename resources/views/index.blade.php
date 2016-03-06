@extends('layout')

@section('content')

<div class="col-md-12">

	<div class="well">
	<form class="form-inline" name="frm_pesquisar" action="/pesquisar" method="get">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
				    <label for="nr_cpf">CPF:</label>
					<input type="text" name="nr_cpf" class="form-control" id="nr_cpf" placeholder="">
				</div>
				<div class="form-group">
				    <label for="cnd_ds_nome">Nome:</label>
					<input type="text" name="cnd_ds_nome" class="form-control" id="cnd_ds_nome" placeholder="">
				</div>
				<div class="form-group">
				    <label for="exampleInputName2">Vaga:</label>
					@include('vaga.partials.listar')
				</div>
				<div class="form-group">
				    <label for="exampleInputName2">Situação:</label>
					@include('lista_situacao')
				</div>

				<div class="form-group">
					<button type="submit" name="pesquisar" class="btn btn-info">Pesquisar</button>
				</div>

			</div>
		</div>
	</form>
	</div>

</div>

<div class="container">
	{!! $candidatos->links() !!}
	<div class="well">
    @foreach ($candidatos as $candidato)
        
      @include('candidato.partials.lista_candidatos')

    @endforeach
    </div>
    {!! $candidatos->links() !!}
</div>

@endsection