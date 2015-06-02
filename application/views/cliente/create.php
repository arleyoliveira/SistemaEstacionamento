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
	
	echo PainelUtil::getOpenPainel("Cadastro de Cliente", PainelUtil::PAINEL_DEFAULT); //inicio do painel
		echo DivUtil::openDivRow();
		echo form_open("cliente/cadastrar");
			echo DivUtil::openDivColMod("col-md-12");
				echo form_label('Nome Completo (*)') . "<br />";
				echo form_input(array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control', 'placeholder' => 'Nome Completo'), set_value('nome')) . "<br />";
			echo DivUtil::closeDiv();
		echo DivUtil::closeDivRow();
		echo DivUtil::openDivRow();
			echo DivUtil::openDivColMod("col-md-6");
				//cpf
				echo form_label('CPF (*)') . "<br />";
	  			echo form_input(array('id' => 'cpf', 'name' => 'cpf', 'class' => 'form-control', 'placeholder' => 'CPF'), set_value('cpf')) . "<br />";
			echo DivUtil::closeDiv();
				
			echo DivUtil::openDivColMod("col-md-6");
				//rg
				echo form_label('Identidade (*)') . "<br />";
	  			echo form_input(array('id' => 'rg', 'name' => 'rg', 'class' => 'form-control', 'placeholder' => 'RG'), set_value('rg')) . "<br />";
			echo
			 DivUtil::closeDiv(); 
		echo DivUtil::closeDivRow();
		//fim div row
		echo DivUtil::openDivRow();
		echo DivUtil::openDivColMod("col-md-6");
			echo form_label('Data de Nasc.:') . "<br/ >";
			echo form_input(array('type' => 'date', 'id' => 'dataNascimento', 'name' => 'dataNascimento', 'class' => 'form-control', 'placeholder' => '')) . "<br />";
		echo DivUtil::closeDiv(); 
		echo DivUtil::closeDivRow();
		echo DivUtil::openDivRow();
		echo DivUtil::openDivColMod("col-md-12")	;
			echo '<span id="sumit" style="display: inline;float: right;">';
			echo BotaoUtil::getBataoSubmit(IconsUtil::getIcone(IconsUtil::ICON_SEND) . ' Cadastrar ', BotaoUtil::BTN_PRIMARY);
			echo '</span>';
		echo DivUtil::closeDiv();
		echo DivUtil::closeDivRow();
	echo form_close();
	echo PainelUtil::getClosePainel(); //fim do painel
	