<?php

class BotaoUtil {

    const BTN_DEFAULT = "btn-default";
    const BTN_PRIMARY = "btn-primary";
    const BTN_SUCCESS = "btn-success";
    const BTN_INFO = "btn-info";
    const BTN_WARNING = "btn-warning";
    const BTN_DANGER = "btn-danger";
    const BTN_LINK = "btn-link";

    public static function getBataoSubmit($value, $tipo) {
        return '<button type="submit" class="btn ' . $tipo . '">' . $value . '</button>';
    }

    public static function getBotaoPadrao($value, $tipo) {
        return '<button type="button" class="btn ' . $tipo . '">' . $value . '</button>';
    }

    public function getBotaoAnimado() {
        
    }

    public static function getOpenBotaoDropDownList($name){
        $mod = '
            <div class="btn-group">
                <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                  '.$name.' <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                 
        ' ;
    }
    
    public static function getCloseBotaoDropDownList(){
        return '
                </ul>
              ';
    }
}
