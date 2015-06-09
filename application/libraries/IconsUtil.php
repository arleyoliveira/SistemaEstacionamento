<?php
	class IconsUtil{
		
		const ICON_SALVAR = "glyphicon-floppy-disk";
		const ICON_ALERT = "glyphicon glyphicon-alert";
		const ICON_SEND = "glyphicon-send";
		const ICON_PARERCLIP = "glyphicon-paperclip";
		const ICON_WRECH = "glyphicon-wrench";
		const ICON_GLOBE = "glyphicon-globe";
		const ICON_EXCLAMTION_SING = "glyphicon-exclamation-sign";
		const ICON_EXCLAMTION_LIST = "glyphicon-list";
		const ICON_OK = "glyphicon-ok";		
		const ICON_REMOVE = "glyphicon-remove";	
		const ICON_COG = "glyphicon-cog";	
		const ICON_TRASH = "glyphicon-trash";	
		const ICON_USER = "glyphicon-user";
		const ICON_PENCIL = "glyphicon-pencil";	
		const ICON_MINUS = "glyphicon-minus";
		const ICON_PLUS = "glyphicon-plus";
		const ICON_FILE = "glyphicon-file";
		const ICON_TH = "glyphicon-th";
		const ICON_TH_LIST = "glyphicon-th-list";
		const ICON_OFF = "glyphicon-off";
		const ICON_INFO_SING = "glyphicon-info-sign";
		const ICON_PLUS_SING = "glyphicon-plus-sign";
		const ICON_MINUS_SING	= "glyphicon-minus-sign";
		const ICON_SEARCH = "glyphicon-search";
		const ICON_GLASS = "glyphicon-glass";
		const ICON_USD = "glyphicon-usd";
                const ICON_UPLOAD = "glyphicon-upload";
                const ICON_DOWNLOAD = "glyphicon-download";
		
		public static function getIcone($type){
			return '<span class="glyphicon '.$type.'" aria-hidden="true"></span>';
		}
	
	} 