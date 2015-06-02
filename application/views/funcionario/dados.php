<?php
	if(validation_errors() != NULL):
		echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_DANGER);
		echo validation_errors();
		echo ModMensagemUtil::getCloseAlertMensagem();
	endif;
	
	if($this->session->flashdata('edicaook')):
		echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_SUCCESS);
		echo $this->session->flashdata('edicaook');
		echo ModMensagemUtil::getCloseAlertMensagem();
	endif;
	
	$query = $this->UsuarioDAO->get_byEmailAt($this->session->email)->row();
?>
<a name="cadastro"></a>
<div class="panel panel-default">
  <div class="panel-heading">    
  	<h3 class="panel-title">
  		<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Dados do Usuário</h3>
  </div>
  <div class="panel-body">
  
<?php
	echo form_open('index.php/Usuario/update');
	echo form_label('Nome Completo (*)') . "<br />";
	echo form_input(array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control', 'placeholder' => 'Nome Completo'), set_value('nome', $query->nome)) . "<br />";
	
?>
	<div class="row">
	  <div class="col-md-6">
	  	<?php
	  		echo form_label('CPF (*)') . "<br />";
	  		echo form_input(array('id' => 'cpf', 'name' => 'cpf', 'class' => 'form-control ', 'placeholder' => 'CPF'), set_value('cpf',$query->cpf)) . "<br />";
	 	?>
	  </div>
	  <div class="col-md-6">
	  	<?php
	  	echo form_label('Identidade (*)') . "<br />";
	  		echo form_input(array('id' => 'rg', 'name' => 'rg', 'class' => 'form-control', 'placeholder' => 'RG'), set_value('rg', $query->rg)) . "<br />";
			
		?>
	  </div>
	</div>
<?php
	echo form_label('Email (*)') . "<br />";
	echo form_input(array('name' => 'email', 'type' => 'email',  'class' => 'form-control' , 'placeholder' => 'exemple@exemple.com', ' disabled' => 'disabled'), set_value('email', $query->email)) . "<br />";
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

?>
	<div class="row">
	  <div class="col-md-4"></div>
	  <div class="col-md-4 col-md-offset-9">
	  	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Atualizar Registros </button>
	</div>
	</div>

<?php
	echo form_hidden("email", $query->email);
	echo form_close();
	
?>
 </div>
</div>
<script>
$(document).ready(function(){
      $("#cpf").mask("999.999.999-99");
});
</script>

