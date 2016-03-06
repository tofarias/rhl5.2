<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

   <div class="panel panel-primary">

      <div class="panel-heading" role="tab" id="-heading{{ $candidato->cnd_id }}">
         <h4 class="panel-title"> 
         	<a style="_display:block" role="button" data-toggle="collapse" data-parent="#accordion" href="#heading{{ $candidato->cnd_id }}" aria-expanded="false" aria-controls="collapseOne" class="collapsed"> 
         		Candidato: {{ $candidato->ds_nome }}
         	</a>
         </h4>
      </div>

      <div id="heading{{ $candidato->cnd_id }}" class="panel-collapse collapse warning" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
         <div class="panel-body">
            <div class="well">
               <div class="row">
                  <div class="col-md-12">
                     <label>CPF: </label> <span>{{ $candidato->nr_cpf }}</span>
                     <label>Nascimento: </label> <span>{{ date('d/m/Y', strtotime($candidato->dt_nascimento)) }}</span>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <label>Telefone 1: </label> <span>{{ $candidato->telefone1 }}</span>
                     <label>Telefone 2: </label> <span>{{ $candidato->telefone2 }}</span>                     
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <label>E-mail 1: </label> <span>{{ $candidato->email1 }}</span>
                     <label>E-mail 2: </label> <span>{{ $candidato->email2 }}</span>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <label>UF: </label> <span>{{ $candidato->uf }}</span>
                     <label>Cidade: </label> <span>{{ $candidato->cidade }}</span>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <label>CEP: </label> <span>{{ $candidato->cep }}</span>
                     <label>Bairro: </label> <span>{{ $candidato->bairro }}</span>
                     <label>Rua: </label> <span>{{ $candidato->rua }}</span>
                     <label>Complemento: </label> <span>{{ $candidato->complemento }}</span>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <label>Observação: </label> <span>{{ $candidato->observacao }}</span>
                  </div>
               </div>
            </div>
         </div>
      
      <div class="well">   
      <fieldset>
      <legend>Histórico de Candidaturas</legend>

      @if( $candidato->vagaCandidatos->count() )

         <table class="table table-condensed historico_candidaturas">

            <thead>
               <tr>
               <th>Código</th>
               <th>Data</th>
               <th>Vaga</th>               
               <th>Situação</th>
               <th>Obseração</th>
               </tr>
            </thead>
            
            <tbody>
               @foreach( $candidato->vagaCandidatos as $vagaCandidato )
               <tr data-sto_id="{{ $vagaCandidato->sto_id }}">
                  <th scope="row">{{ $vagaCandidato->vag_cnd_id }}</th>
                  <td>{{ date('d/m/Y H:i:s', strtotime($vagaCandidato->created_at)) }}</td>
                  <td>{{ $vagaCandidato->vaga->ds_nome }}</td>
                  <td>{{ $vagaCandidato->situacaoVagCnd->ds_nome }}</td>
                  <td>{{ empty($vagaCandidato->observacao) ? '-' : $vagaCandidato->observacao }}</td>
               </tr>
               @endforeach
            </tbody>

         </table>
      @endif

      </fieldset>
      </div>

      </div>

   </div>

</div>