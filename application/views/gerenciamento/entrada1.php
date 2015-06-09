<div class="panel panel-default">
  <div class="panel-heading">    
  	<h3 class="panel-title">
  		<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Regitra entrada de veiculo</h3>
  </div>
  
  <div class="panel-body">
  	<div class="row">
  		<div class="col-md-4">
  		<?php
			echo form_open('index.php/gerenciador/entrada');
			echo form_label('PLACA (*)') . "<br />";
			echo form_input(array('id' => 'placa', 'name' => 'placa', 'class' => 'form-control', 'placeholder' => 'PLACA'), set_value('placa')) . "<br />";	
		?>
		</div>
		<div class="col-md-4">
  		<?php
			//echo form_open('index.php/funcionario/cadastrar');
			echo form_label('CPF CLIENTE (*)') . "<br />";
			echo form_input(array('id' => 'cpf', 'name' => 'cpf', 'class' => 'form-control', 'placeholder' => 'CPF'), set_value('cpf')) . "<br />";	
		?>
		</div>
  	</div>
	<div class="row">
	  <div class="col-md-4">
	  	<?php
	  		echo form_label('Nome do carro (*)') . "<br />";
	  		echo form_input(array('id' => 'nomeCarro', 'name' => 'nomeCarro', 'class' => 'form-control', 'placeholder' => 'Nome do carro'), set_value('nomeCarro')) . "<br />";
	 	?>
	  </div>
	  <div class="col-md-4">
	  	<?php
	  		echo form_label('Cor') . "<br />";
	  		echo form_input(array('id' => 'corCarro', 'name' => 'corCarro', 'class' => 'form-control', 'placeholder' => 'Cor do carro'), set_value('corCarro')) . "<br />";		
		?>
	  </div>
	  <div class="col-md-4">
	  		<div class="form-group">
			  <label for="sel1">Categoria </label>
			  <select class="form-control" id="sel1">
			    <option selected="selected">Selecione uma opção</option>
			    <option>Caminhão</option>
			    <option>Carro de passeio</option>
			    <option>Pickup</option>
			    <option>Ônibus</option>
			  </select>
			</div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-4">
	  	<div class="form-group">
		  <label for="sel1">Tipo de cobraça</label>
		  <select class="form-control" id="sel1">
		    <option>Hora</option>
		    <option>Dia</option>
		    <option>Mensal</option>
		    <option>Contrato</option>
		  </select>
		</div>
	  </div>
	  <div class="col-md-8">
	  	<?php
	  		echo form_label('Observação') ;
	  		echo form_input(array('id' => 'observacao', 'name' => 'observacao', 'class' => 'form-control', 'placeholder' => 'Observação'), set_value('observacao')) . "<br />";
	 	?>
	  </div>
<?php
	echo DivUtil::openDivColMod("col-md-12")	;
			echo '<span id="sumit" style="display: inline;float: right;">';
			echo BotaoUtil::getBataoSubmit(IconsUtil::getIcone(IconsUtil::ICON_SEND) . ' Registrar Entrada ', BotaoUtil::BTN_PRIMARY);
			echo '</span>';
		echo DivUtil::closeDiv();
	echo DivUtil::closeDivRow();	
	echo form_close();
	
?>
 </div>
</div>
