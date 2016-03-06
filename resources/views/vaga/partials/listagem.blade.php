<table class="table table-condensed">

    <thead>
       <tr>
       <th>Código</th>
       <th>Data</th>
       <th>Nome</th>
       <th>Observação</th>
       </tr>
    </thead>
    
    <tbody>
       @foreach( $vagas as $vaga )
       <tr>
          <th scope="row">{{ $vaga->vag_id }}</th>
          <td>{{ date('d/m/Y H:i:s', strtotime($vaga->created_at)) }}</td>
          <td>{{ $vaga->ds_nome }}</td>
          <td>{{ $vaga->observacao }}</td>
       </tr>
       @endforeach
    </tbody>

</table>