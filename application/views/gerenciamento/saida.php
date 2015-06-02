<?php 
		if(validation_errors() != NULL):
			echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_DANGER);
			echo validation_errors();
			echo ModMensagemUtil::getCloseAlertMensagem();
		endif;
		if($controle == false && $MENSAGEM != ""):
		 echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_INFO);
		 		echo $MENSAGEM;
		 echo ModMensagemUtil::getCloseAlertMensagem();
				
		endif;
		echo PainelUtil::getOpenPainel("Saida de veiculo", PainelUtil::PAINEL_WARNING);
			echo DivUtil::openDivRow();
			  echo form_open("gerenciador/saida");
				echo DivUtil::openDivColMod("col-md-5");
					echo form_label('PLACA (*)');
					echo form_input(array('id' => 'placa1', 'name' => 'veiculo', 'class' => 'form-control', 'placeholder' => 'ABC-0000'), set_value('veiculo'));		    
			    echo DivUtil::closeDiv();
				echo DivUtil::openDivColMod("col-md-3");
						echo "<br />";
						echo BotaoUtil::getBataoSubmit(IconsUtil::getIcone(IconsUtil::ICON_SEARCH) . ' Consultar', BotaoUtil::BTN_PRIMARY);
				echo DivUtil::closeDiv();
			  echo form_close();
			  echo DivUtil::closeDivRow();
			
			
			if($controle):		 
				echo DivUtil::openDivRow();
					echo DivUtil::openDivColMod("col-md-10");
					$template = array(
	       					 'table_open' => '<table class="table">'
						);
						$this->table->set_template($template);
						$valor = number_format($valor, 2, '.', '');
						$this->table->set_heading('Placa', 'Cliente', 'Entrada', 'Valor');
						$this->table->add_row($registro['veiculo'], $registro['cliente'],$registro['horaEntrada'], 'R$ '. $valor);
						echo "<br />";
						echo $this->table->generate();
						echo form_open("gerenciador/liquidar");
							echo form_hidden("valor", $valor);
							echo form_hidden("veiculo", $registro['veiculo']);
							echo '<span id="sumit" style="display: inline;float: right;">';
								echo BotaoUtil::getBataoSubmit(IconsUtil::getIcone(IconsUtil::ICON_SEND) . ' Liquidar', BotaoUtil::BTN_PRIMARY);
							echo '</span>';
						echo form_close();
					echo DivUtil::closeDiv();
				echo DivUtil::closeDivRow();
			endif;
		echo PainelUtil::getClosePainel();
