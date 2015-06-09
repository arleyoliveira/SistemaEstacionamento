<?php
	if(validation_errors() != NULL):
		echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_DANGER);
		echo validation_errors();
		echo ModMensagemUtil::getCloseAlertMensagem();
	endif;
	
	if($this->session->flashdata('cadastrook')):
		echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_SUCCESS);
		echo $this->session->flashdata('cadastrook');
		echo ModMensagemUtil::getCloseAlertMensagem();
	endif;
?>
<a name="cadastro"></a>
<div class="panel panel-default">
  <div class="panel-heading">    
  	<h3 class="panel-title">
  		<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Cadastro de Usuário</h3>
  </div>
  <div class="panel-body">
  
<?php
	echo form_open('index.php/Usuario/cadastrar');
	echo form_label('Nome Completo (*)') . "<br />";
	echo form_input(array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control', 'placeholder' => 'Nome Completo'), set_value('nome')) . "<br />";
	
?>
	<div class="row">
	  <div class="col-md-6">
	  	<?php
	  		echo form_label('CPF (*)') . "<br />";
	  		echo form_input(array('id' => 'cpf', 'name' => 'cpf', 'class' => 'form-control', 'placeholder' => 'CPF'), set_value('cpf')) . "<br />";
	 	?>
	  </div>
	  <div class="col-md-6">
	  	<?php
	  		echo form_label('Identidade (*)') . "<br />";
	  		echo form_input(array('id' => 'rg', 'name' => 'rg', 'class' => 'form-control', 'placeholder' => 'RG'), set_value('rg')) . "<br />";
			
		?>
	  </div>
	</div>
<?php
	echo form_label('Email (*)') . "<br />";
	echo form_input(array('name' => 'email', 'type' => 'email',  'class' => 'form-control' , 'placeholder' => 'exemple@exemple.com'), set_value('email')) . "<br />";
?>
	<div class="row">
	  <div class="col-md-6">
	  	<?php
	  		echo form_label("Senha") . "<br />";
	  		echo form_password(array('name' => 'senha', 'class' => 'form-control'), set_value('senha')) . "<br />";
	 	?>
	  </div>
	</div>
	
	<div class="row">
	  <div class="col-md-6">
	  	<?php
	  		echo form_label("Repita a senha") . "<br />";
			echo form_password(array('name' => 'senha2', 'class' => 'form-control'), set_value('senha2')) . "<br />";
	 	?>
	  </div>
	</div>
<?php
	echo DivUtil::openDivRow();
	echo DivUtil::openDivColMod("col-md-12");
			echo '<span id="sumit" style="display: inline;float: right;">';
			echo BotaoUtil::getBataoSubmit(IconsUtil::getIcone(IconsUtil::ICON_SEND) . ' Cadastrar ', BotaoUtil::BTN_PRIMARY);
			echo '</span>';
		echo DivUtil::closeDiv();
		echo DivUtil::closeDivRow();
	echo form_close();
	
?>
 </div>
</div>


