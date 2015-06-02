<?php
	echo "<br />";
	if(validation_errors() != NULL){
?>

	<br />
	<div class="alert alert-danger" role="alert"> 
		<?php echo validation_errors(); ?>
	</div>
<?php
	}
	$iduser = $this->uri->segment(3);
	if($iduser == NULL) redirect('crud/retrieve');
	
	$query = $this->crud->get_byid($iduser)->row();
	
	echo form_open("crud/update/$iduser");
	
		
	if($this->session->flashdata('edicaook')):
		echo '<div class="alert alert-success" role="alert"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>' .$this->session->flashdata('edicaook') . '</div>';
	endif;
	echo form_label('Nome Completo') . "<br />";
	echo form_input(array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control'), set_value('nome', $query->nome), 'autofocus') . "<br />";;
	echo form_label('Email') . "<br />";
	echo form_input(array('name' => 'email', 'class' => 'form-control'), set_value('email', $query->email)) . "<br />";
	echo form_label('Login') . "<br />";
	echo form_input(array('name' => 'login', 'class' => 'form-control'), set_value('login', $query->login)) . "<br />";
	echo form_label("Senha") . "<br />";
	echo form_password(array('name' => 'senha', 'class' => 'form-control'), set_value('senha')) . "<br />";
	echo form_label("Repita a senha") . "<br />";
	echo form_password(array('name' => 'senha2', 'class' => 'form-control'), set_value('senha2')) . "<br /> <br />";
	echo form_hidden("idusuario", $query->id);
	echo form_submit(array('name' => 'cadastrar', 'class' => 'btn btn-primary'), 'Alterar dados'). "<br />";
	
	echo form_close();
