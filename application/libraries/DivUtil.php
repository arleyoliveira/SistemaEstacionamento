<?php
	class DivUtil{
		
		
		public static function openDivRow()
		{
			return '<div class="row">';
		}
		public static function closeDivRow()
		{
			return "</div>";
		}
		
		public static function openDivColMod($numeroCol){
			return '<div class="'.$numeroCol.' ">';
		}
		
		public static function closeDiv(){
			return '</div>';
		}
	}
