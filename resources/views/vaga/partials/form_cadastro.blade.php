<form class="form-horizontal">

	
	<fieldset>
		<legend>Cadastrar Vaga</legend>

			<div class="form-group">
		    	<label for="nome_vaga" class="col-lg-2 control-label">Nome</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" autofocus name="nome_vaga" id="nome_vaga">
			    </div>
		  	</div>

		  	<div class="form-group">
		    	<label for="total_vaga" class="col-lg-2 control-label">Disponível</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="total_vaga" id="total_vaga">
			    </div>
		  	</div>

		  	<div class="form-group">
			    <label for="obs_vaga" class="col-lg-2 control-label">Observação</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" cols="50" _rows="50" name="obs_vaga"></textarea>
			    </div>
		  	</div>

	</fieldset>

	</fieldset>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-success disabled">Salvar</button>
	    </div>
	  </div>

</form>