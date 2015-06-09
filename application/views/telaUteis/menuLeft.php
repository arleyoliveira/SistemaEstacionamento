
<script src="<?php echo base_url('includes/my_js/script.js') ?>"></script>

<div class="row">
  <div class="col-md-3">
  	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title" id="menu">
	    	<span id="menutitle" class=""><?php echo IconsUtil::getIcone(IconsUtil::ICON_TH_LIST) . ' '; ?> Menu </span>
	    </h3>  
	  </div>
	  <div class="panel-body" id="divclose">
	  	<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading"> <h3 class="panel-title">  <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>  Adminstração</div> </h3>
		  <!-- List group -->
		  <ul>
		    <li>Gerenciamento</li>
		    <li> 
                        <div class="btn-group">
                            <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                              Caixa <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li> <?php echo anchor('gerenciador/iniciar_caixa', 'Iniciar') ?></li>
                                <li> <?php echo anchor('gerenciador/finalizar_caixa', 'Finalizar') ?> </li>
                            </ul>
                          </div>

                    </li>
		    <li> <?php echo anchor('gerenciador/gerarRelatorioDiario', 'Relátorio diário') ?> </li>  
		    <li>Relátorio mensal</li> 
		    <li>Relátorio anual</li>   
		  </ul>
		</div>
	    <div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">
		  	<h3 class="panel-title"> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Veiculo </h3>
		  </div>
		  <div>	
		  <!-- List group -->
		  <ul>
		    <li><?php echo anchor('gerenciador/entrada', 'Entrada') ?><br></li>
		    <li><?php echo anchor('gerenciador/saida', 'Saída') ?><br></li>  
		  </ul>
		  </div>
		</div>
		<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title"> <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Novo</h3>
	  </div>
	  <div>
	  	<ul>
		    <li><?php echo anchor('usuario/cadastrar', 'Usuário') ?></li>
		    <li><?php echo anchor('cliente/cadastrar', 'Cliente') ?></li>
		    <li><?php echo anchor('veiculo/cadastrar', 'Veiculo') ?></li>
		    <li>Adminstrador</li>
		    <li><?php echo anchor('veiculo/cadastarCategoria', 'Categoria') ?></li>
		    <li>Mais sugestões</li>
		  </ul>
	  </div>
	</div>
	  </div>
	</div> 	
  </div>
  <div class="col-md-9">
