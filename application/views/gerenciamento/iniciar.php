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
		
	echo PainelUtil::getOpenPainel( IconsUtil::getIcone(IconsUtil::ICON_USD)." Iniciar caixa ", PainelUtil::PAINEL_WARNING);
		echo form_open("gerenciador/iniciar_caixa");
			echo DivUtil::openDivRow();
				echo DivUtil::openDivColMod("col-md-5");
					echo '
						<div class="form-group">
						    <label class="sr-only" for="exampleInputAmount">0.00</label>
						    <div class="input-group">
						      <div class="input-group-addon">$</div>
						      <input type="text" class="form-control" id="valor" name="valor" placeholder="" value="0.00">
						      <div class="input-group-addon">.00</div>
						    </div>
						  </div>
					';
				echo DivUtil::closeDiv();
				echo DivUtil::openDivColMod("col-md-5");	
					echo BotaoUtil::getBataoSubmit(IconsUtil::getIcone(IconsUtil::ICON_SEND) . ' Iniciar', BotaoUtil::BTN_PRIMARY);
				echo DivUtil::closeDiv();
			echo DivUtil::closeDivRow();
		echo form_close();
	echo PainelUtil::getClosePainel();