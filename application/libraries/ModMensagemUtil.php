<?php 
	class ModMensagemUtil{
		
		const ALERT_SUCCESS = "alert-success";
		const  ALERT_INFO = "alert-info";
		const ALERT_WARNING = "alert-warning";
		const ALERT_DANGER = "alert-danger";
		
		public static function getAlertMensagemClose($classe){
			$mod = '
				<div class="alert '.$classe.' alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  
				
			';
			
			return $mod;
		}
		public static function getCloseAlertMensagem($value='')
		{
			return '</div>';
		}
		
		public static function getAlertMensagemDefault($classe){
			$mod = '
				<div class="alert '.$classe.'" role="alert">
			';
			return $mod;
		} 
	}
