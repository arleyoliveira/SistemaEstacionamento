<?php 
	if($this->session->flashdata('excluirok')):
			echo '<div class="alert alert-success" role="alert"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  ' .$this->session->flashdata('excluirok') . '</div>';
		endif;
?>
	<br />
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Usuários Cadastrados</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="table-responsive"></div>
<?php
	$template = array(
        'table_open' => '<table class="table">'
	);

	$this->table->set_template($template);
	$this->table->set_heading('ID', 'Nome', 'Email', 'Login', 'Operações');
	foreach ($usuarios as $linha):
		$this->table->add_row($linha->id, $linha->nome, $linha->email, $linha->login, 
							anchor("crud/update/$linha->id", 'Editar') . ' - '. anchor("crud/delete/$linha->id", 'Deletar'));
	endforeach;
	
	echo $this->table->generate();
?>
			</div>
 		</div>
 	</div>