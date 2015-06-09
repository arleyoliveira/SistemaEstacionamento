<link href="<?php echo base_url('/includes/jquery1/jquery-ui.css') ?>" type="text/css" rel="stylesheet">

        <script src="<?php echo base_url('/includes/jquery1//external/jquery/jquery.js') ?>"></script>

        <script src='<?php echo base_url("/includes/jquery1/jquery-ui.js") ?>'></script>
        
        <script>
        	$(document).ready(function(){
				 
                                  
                                  $("#veiculo").autocomplete({
				    source: "<?php echo base_url('veiculo/search'); ?>" 	
				  });
                                  
                                  $("#cliente").autocomplete({
				    source: "<?php echo base_url('cliente/search'); ?>" 	
				  });
			});
        </script>
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
        
        if($this->session->flashdata('caixafinalizado')):
		echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_SUCCESS);
			echo $this->session->flashdata('caixafinalizado');
		echo ModMensagemUtil::getCloseAlertMensagem();
	endif;
	
	if($this->session->flashdata('retiradaok')):
		echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_SUCCESS);
			echo $this->session->flashdata('retiradaok');
		echo ModMensagemUtil::getCloseAlertMensagem();
	endif;
	$tipodecobranca = $this->GerenciadorDAO->getTipoCobranca();
	if($tipodecobranca == false):
		echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_WARNING);
			echo "Nenhum Tipo de cobrança foi cadastrado!";
		echo ModMensagemUtil::getCloseAlertMensagem();
	endif;
	
	if($ERRO != FALSE):
		echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_DANGER);
		echo $ERRO;
	echo ModMensagemUtil::getCloseAlertMensagem();
	endif;
	
	echo PainelUtil::getOpenPainel("Entrada", PainelUtil::PAINEL_DEFAULT);
		echo form_open("gerenciador/entrada");
			echo DivUtil::openDivRow();
				echo DivUtil::openDivColMod("col-md-5");
					echo form_label('PLACA (*)') . "<br />";
					echo form_input(array('id' => 'veiculo', 'name' => 'veiculo', 'class' => 'form-control', 'placeholder' => 'ABC-0000'), set_value('veiculo')) . "<br />";
				echo DivUtil::closeDiv();
				echo DivUtil::openDivColMod("col-md-5");
					echo form_label('CLIENTE (*)') . "<br />";
					echo form_input(array('id' => 'cliente', 'name' => 'cliente', 'class' => 'form-control', 'placeholder' => 'Cliente'), set_value('cliente')) . "<br />";
				echo DivUtil::closeDiv();
			echo DivUtil::closeDivRow();
			echo DivUtil::openDivRow();
			
				echo DivUtil::openDivColMod("col-md-5");
				 echo '
				 	<label for="sel1">Tipo de cobrança</label>
					  <select class="form-control" id="sel1" name="tipodecobranca">';
					    foreach ($tipodecobranca->result() as $row) :
							echo '<option value="'.$row->codigo .'"> '.$row->tipo . '</option>';
						endforeach;
					 echo ' </select>';
				echo DivUtil::closeDiv();
				echo DivUtil::openDivColMod("col-md-5");
					echo form_label('Observação') ;
	  				echo form_input(array('id' => 'observacao', 'name' => 'observacao', 'class' => 'form-control', 'placeholder' => 'Observação'), set_value('observacao')) . "<br />";
				echo DivUtil::closeDiv();
			echo DivUtil::closeDivRow();
			echo DivUtil::openDivColMod("col-md-12")	;
				echo '<span id="sumit" style="display: inline;margin-right: 16%; float: right;">';
						echo BotaoUtil::getBataoSubmit(IconsUtil::getIcone(IconsUtil::ICON_SEND) . ' Registrar Entrada', BotaoUtil::BTN_PRIMARY);
					echo '</span>';
				echo DivUtil::closeDiv();
		echo form_close();
	echo PainelUtil::getClosePainel();
?>
