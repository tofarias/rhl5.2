<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flat UI Free 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/style.css">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

    <style>

    </style>

  </head>
  <body style="-background-color:#E8E8E8">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
          <!-- Nav -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">Home</a>
          </div>
          <!-- Nav collapse -->
          <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav navbar-left">
                  <li><a href="/candidato/cadastrar">Cadastrar Candidato</a></li>
                  <li><a href="/vaga/cadastrar">Cadastrar Vaga</a></li>
                  <li><a href="#">Pesquisar</a></li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <div class="container">
    <!-- <header >
      <div class="row">
        <div class="col-lg-12">
          <h1>Bootstrap Themes</h1>
          <div class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</div>
          <a href="#" class="btn btn-primary">Call to action!</a>
        </div>
      </div>
    </header> -->
    <hr>
  </div>


  <div id="page-content">
    <div class="container">
      <div class="heading">
        <h2>Our Team</h2>
      </div>
      <div class="content">
        <div class="row">
        
        @yield('content')

        </div>
      </div>
      <hr>
    </div>
  </div>

  <footer>
    <div class="wrap-footer">
      <div class="container">


        <div class="row">

          sss

        </div>
      </div>
    </div>
  </footer>

  <script src="/js/jquery-1.11.3.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="/js/bootstrap.min.js"></script>

  <script>

  $(function(){

    $cep = $('input[name="cep_cnd"]');

    $cep.focusout(function(a, b, c){

      var $this = $(this);
      var cep = $.trim( $this.val() );

      if( cep.length > 0 )
      {
        var url = 'http://viacep.com.br/ws/'+cep+'/json';

        $.get( url, function( data ) {
          
          $('input[name="rua_cnd"]').val( data.logradouro );
          $('input[name="compl_cnd"]').val( data.complemento );
          $('input[name="bairro_cnd"]').val( data.bairro );
          $('input[name="cidade_cnd"]').val( data.localidade );
          $('input[name="uf_cnd"]').val( data.uf );
          
        }, 'json').fail(function() { alert( "CEP não encontrado" ); });
      }

    });

    //
    
    $('table.historico_candidaturas tr[data-sto_id]').each(function(index, el)
    {
      switch( parseInt($(this).attr('data-sto_id')) )
      {
        case 1: $(this).addClass('success');  break;
        case 2: $(this).addClass('danger');   break;
        case 3: $(this).addClass('warning');  break;
      }      
    });

  });
  </script>

  </body>
</html>
