
<?php

echo DivUtil::openDivRow();
echo DivUtil::openDivColMod("col-md-8 col-md-offset-2");
if ($MENSAGEM == FALSE):
    //echo '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
    //';
    echo form_open("gerenciador/encerrar_caixa");
    echo '
       <div class="modal fade in"  tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: block;">
      
            <div class="modal-dialog">
           <!-- Modal content-->
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" id="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Finalizador de caixa</h4>
             </div>
             <div class="modal-body">
               <p>Deseja realmente finalizar o caixa ? </p>
             </div>
             <div class="modal-footer">
               <a type="button" href="entrada" class="btn btn-default" id="nao" data-dismiss="modal">Não</a>
               
               
               <button type="submit" class="btn btn-primary">Sim</button>
             </div>
           </div>
         </div>
    ';
    echo form_hidden("finalizar", "sim");
else:
    echo ModMensagemUtil::getAlertMensagemDefault(ModMensagemUtil::ALERT_INFO);
    echo $MENSAGEM;
    echo ModMensagemUtil::getCloseAlertMensagem();
endif;
echo DivUtil::closeDiv();
echo DivUtil::closeDivRow();

?>
<script>
    $(document).ready(function(){
     $("#close").click(function(){
        $("#my").hide();
      });
     $("#nao").click(function(){
        $("#my").hide();
      });
     });
</script>
