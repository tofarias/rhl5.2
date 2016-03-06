<form class="form-horizontal">

	
	<fieldset>
		<legend>Dados Pessoais</legend>

			<div class="form-group">
		    	<label for="cpf_cnd" class="col-lg-2 control-label">CPF</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" autofocus name="cpf_cnd" id="nome_cnd">
			    </div>
		  	</div>

		  	<div class="form-group">
		    	<label for="nome_cnd" class="col-lg-2 control-label">Nome</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="nome_cnd" id="nome_cnd">
			    </div>
		  	</div>

		  	<div class="form-group">
			    <label for="sobrenome_cnd" class="col-lg-2 control-label">Sobrenome</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="sobrenome_cnd" id="nome_cnd">
			    </div>
		  	</div>

		  	<div class="form-group">
			    <label for="dt_nasc_cnd" class="col-lg-2 control-label">Data de Nascimento</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" id="dt_nasc_cnd" name="dt_nasc_cnd">
			    </div>
		  	</div>

		  	<div class="form-group">
			    <label for="dt_nasc_cnd" class="col-lg-2 control-label">Sexo</label>

			    <div class="col-sm-10">
			  	<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Masculino
				</label>
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Feminino
				</label>
				</div>
			</div>

	</fieldset>

	<fieldset>
		<legend>Dados de Contato</legend>

			<div class="form-group">
		    	<label for="tel1_cnd" class="col-lg-2 control-label">Telefone 1</label>
			    <div class="col-sm-10">
			    	<input type="text" class="form-control" id="tel1_cnd" name="tel1_cnd">
			    </div>
		  	</div>

		  	<div class="form-group">		  		
		    	<label for="tel2_cnd" class="col-lg-2 control-label">Telefone 2</label>
		    	<div class="col-sm-10">
			    	<input type="text" class="form-control" id="tel2_cnd" name="tel2_cnd">
			    </div>
		  	</div>

		  	<div class="form-group">
			    <label for="email1_cnd" class="col-lg-2 control-label">E-mail 1</label>
			    <div class="col-sm-10">
			     	<input type="email" class="form-control" id="email1_cnd" name="email1_cnd">
			    </div>
		  	</div>

		  	<div class="form-group">
			    <label for="email2_cnd" class="col-lg-2 control-label">E-mail 2</label>
			    <div class="col-sm-10">
			     	<input type="email" class="form-control" id="email2_cnd" name="email2_cnd">
			    </div>
		  	</div>

	</fieldset>

	<fieldset>
		<legend>Dados de Endereço</legend>

		<div class="form-group">
		    	<label for="cep_cnd" class="col-lg-2 control-label">CEP</label>
			    <div class="col-sm-10">
			    	<input type="text" class="form-control" id="cep_cnd" name="cep_cnd">
			    </div>
		  	</div>

		  	<div class="form-group">		  		
		    	<label for="rua_cnd" class="col-lg-2 control-label">Rua</label>
		    	<div class="col-sm-10">
			    	<input type="text" class="form-control" id="rua_cnd" name="rua_cnd">
			    </div>
		  	</div>

		  	<div class="form-group">
			    <label for="compl_cnd" class="col-lg-2 control-label">Complemento</label>
			    <div class="col-sm-10">
			     	<input type="text" class="form-control" id="compl_cnd" name="compl_cnd">
			    </div>
		  	</div>

		  	<div class="form-group">
			    <label for="bairro_cnd" class="col-lg-2 control-label">Bairro</label>
			    <div class="col-sm-10">
			     	<input type="text" class="form-control" id="bairro_cnd" name="bairro_cnd">
			    </div>
		  	</div>

		  	<div class="form-group">
			    <label for="uf_cnd" class="col-lg-2 control-label">UF</label>
			    <div class="col-sm-10">
			     	<input type="text" class="form-control" id="uf_cnd" name="uf_cnd">
			    </div>
		  	</div>

		  	<div class="form-group">
			    <label for="cidade_cnd" class="col-lg-2 control-label">Cidade</label>
			    <div class="col-sm-10">
			     	<input type="text" class="form-control" id="cidade_cnd" name="cidade_cnd">
			    </div>
		  	</div>

	</fieldset>

	<fieldset>
		<legend>Dados da Vaga</legend>

		<div class="form-group">
		    	<label for="cep_cnd" class="col-lg-2 control-label">Nome</label>
			    <div class="col-sm-10">
			    	@include('vaga.partials.listar')			    
			    </div>
		  	</div>

	</fieldset>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-success disabled">Salvar</button>
	    </div>
	  </div>

</form>