<?php 
	echo PainelUtil::getOpenPainel( IconsUtil::getIcone(IconsUtil::ICON_USD)." Fechar caixa ", PainelUtil::PAINEL_DANGER);
		echo form_open("gerenciador/finalizar_caixa");
			echo DivUtil::openDivRow();
				
				
			echo DivUtil::closeDivRow();
		echo form_close();
	echo PainelUtil::getClosePainel();