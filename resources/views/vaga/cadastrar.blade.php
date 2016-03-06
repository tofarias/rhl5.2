@extends('layout')

@section('content')

	<div class="col-md-12">
	@include('vaga.partials.form_cadastro')
	</div>

	<div class="row">
		@include('vaga.partials.listagem')
		{!! $vagas->links() !!}
	</div>

@endsection