<script>
$(document).ready(function(){
    $("#menu").click(function(){
        $("#divclose").slideToggle(1000);
    });
});
</script>


<div class="row">
  <div class="col-md-3">
  	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title" id="menu">Menu</h3>
	  </div>
	  <div class="panel-body" id="divclose">
	  	<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading"> <h3 class="panel-title">  <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>  Adminstração</div> </h3>
		  <!-- List group -->
		  <ul>
		    <li>Gerenciamento</li>
		    <li>Caixa</li>  
		    <li>Relátorio diário</li>  
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
		    <li><?php echo anchor('index.php/Gerenciador/entrada', 'Entrada') ?><br></li>
		    <li><?php echo anchor('index.php/Gerenciador/saida', 'Saída') ?><br></li>  
		  </ul>
		  </div>
		</div>
		<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title"> <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Novo</h3>
	  </div>
	  <div>
	  	<ul>
		    <li><?php echo anchor('index.php/funcionario/cadastrar', 'Funcionário') ?></li>
		    <li>Veiculo</li>
		    <li>Adminstrador</li>
		    <li>Categoria</li>
		    <li>Mais sugestões</li>
		  </ul>
	  </div>
	</div>
	  </div>
	</div>
	
	
  	
  </div>
  <div class="col-md-8">
