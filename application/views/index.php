
<?php
	$this->load->view("telaUteis/header");
	echo DivUtil::openDivRow();
		
		
		echo DivUtil::openDivColMod("col-md-6 col-md-offset-3");
			echo "<h2 class=text-center> Sistema de Estacionamento</h2>";
			
			if($this->session->flashdata('usuarioinvalido')):
				echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_DANGER);
					echo $this->session->flashdata('usuarioinvalido');
				echo ModMensagemUtil::getCloseAlertMensagem();
			endif;
			echo PainelUtil::getOpenPainel(IconsUtil::getIcone(IconsUtil::ICON_USER).' Login', PainelUtil::PAINEL_INFO);
				echo form_open("usuario/login");
				echo form_label('Email (*)') . "<br />";
				echo form_input(array('name' => 'email', 'type' => 'email',  'class' => 'form-control' , 'placeholder' => 'exemple@exemple.com'), set_value('email')) . "<br />";
				echo form_label("Senha") . "<br />";
	  		   	echo form_password(array('name' => 'senha', 'class' => 'form-control'), set_value('senha')) . "<br />";
				echo DivUtil::openDivRow();
					echo DivUtil::openDivColMod("col-md-3 col-md-offset-3");
					echo DivUtil::closeDiv();
					echo DivUtil::openDivColMod("col-md-3 col-md-offset-3");
						echo BotaoUtil::getBataoSubmit(IconsUtil::getIcone(IconsUtil::ICON_SEND) . ' Entrar ', BotaoUtil::BTN_PRIMARY);
					echo DivUtil::closeDiv();
				echo DivUtil::closeDiv();
				echo form_close();
			echo PainelUtil::getClosePainel();
		//div fechada automatica
		
		
	echo DivUtil::closeDivRow();
	$this->load->view("telaUteis/footer");