<?php 
	echo "<br />";
	$iduser = $this->uri->segment(3);
	if($iduser == NULL) redirect('crud/update');
	
	$query = $this->crud->get_byid($iduser)->row();
?>
	
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Apagar Registros </h3>
	  </div>
	  <div class="panel-body">
<?php
	echo form_label('Nome Completo') . "<br />";
	echo form_input(array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control'), set_value('nome', $query->nome), 'disabled="disabled"') . "<br />";
	echo form_label('Email') . "<br />";
	echo form_input(array('name' => 'email', 'class' => 'form-control'), set_value('email', $query->email), 'disabled="disabled"') . "<br />";
	echo form_label('Login') . "<br />";
	echo form_input(array('name' => 'login', 'class' => 'form-control'), set_value('login', $query->login), 'disabled="disabled"') . "<br />";
	echo form_hidden("idusuario", $query->id);
	echo '<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">Excluir registro</button>';
	///echo form_submit(array('name' => 'cadastrar', 'class' => 'btn btn-primary'), 'Excluir Registro' ). "<br />";	
?>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Excluir registros</h4>
      </div>
      <div class="modal-body">
        <p> <span class="glyphicon glyphicon-exclamation-sign"> </span> Confirmar exclusão de registros ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
        <?php echo form_submit(array('name' => 'cadastrar', 'class' => 'btn btn-primary'), 'Excluir Registro' ). "<br />"; ?>
        <!-- <button class="btn btn-primary" type="submit">Sim</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


	  </div>
	</div>
<script>
	$('#myModal').on('shown.bs.modal', function () {
	 // $('#myInput').focus()
	})
</script>
<?php
		echo form_close();