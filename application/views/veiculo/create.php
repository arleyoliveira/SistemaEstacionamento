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
	
	$categoria = $this->VeiculoDAO->selectCategoria();
	if($categoria == false):
		echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_WARNING);
			echo "Nenhuma categoria foi cadastrada !";
		echo ModMensagemUtil::getCloseAlertMensagem();
	endif;
	
	echo PainelUtil::getOpenPainel(IconsUtil::getIcone(IconsUtil::ICON_PLUS_SING).' Novo Veiculo', PainelUtil::PAINEL_DEFAULT);
		
			echo form_open("veiculo/cadastrar");
			echo DivUtil::openDivRow();
				echo DivUtil::openDivColMod("col-md-5");
					echo form_label('PLACA (*)') . "<br />";
					echo form_input(array('id' => 'placa', 'name' => 'placa', 'class' => 'form-control', 'placeholder' => 'PLACA'), set_value('placa')) . "<br />";
				echo DivUtil::closeDiv();
				echo DivUtil::openDivColMod("col-md-5");
					echo form_label('Nome do carro (*)') . "<br />";
	  			echo form_input(array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control', 'placeholder' => 'Nome do carro'), set_value('nome')) . "<br />";
				echo DivUtil::closeDiv();
			echo DivUtil::closeDivRow();	
			echo DivUtil::openDivRow();
				echo DivUtil::openDivColMod("col-md-5");
					echo form_label('Cor') . "<br />";
					echo form_input(array('id' => 'cor', 'name' => 'cor', 'class' => 'form-control', 'placeholder' => 'Cor do carro'), set_value('cor')) . "<br />";
				echo DivUtil::closeDiv();
				echo DivUtil::openDivColMod("col-md-5");
					
					echo '
						<div class="form-group">
						  <label for="sel1">Categoria </label>
						  <select class="form-control" id="sel1" name="categoria">
						    <option selected="selected">Selecione uma opção</option>';
							
							foreach ($categoria->result() as $row):
								echo '<option value="'.$row->codigo.' ">'.$row->categoria.'</option>';
							endforeach;
						  echo '</select>
						</div>';				
				echo DivUtil::closeDiv();
			echo DivUtil::closeDiv();
				echo DivUtil::openDivColMod("col-md-12")	;
					echo '<span id="sumit" style="display: inline;float: right;">';
						echo BotaoUtil::getBataoSubmit(IconsUtil::getIcone(IconsUtil::ICON_SEND) . ' Cadastrar', BotaoUtil::BTN_PRIMARY);
					echo '</span>';
				echo DivUtil::closeDiv();
			echo DivUtil::closeDivRow();
			echo form_close();
	echo PainelUtil::getClosePainel();