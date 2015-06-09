
<html>
    <head>
        <link href="<?php echo base_url('/includes/jquery1/jquery-ui.css') ?>" type="text/css" rel="stylesheet">

        <script src="<?php echo base_url('/includes/jquery1//external/jquery/jquery.js') ?>"></script>

        <script src='<?php echo base_url("/includes/jquery1/jquery-ui.js") ?>'></script>
        
        <script>
        	$(document).ready(function(){
				  $("#birds").autocomplete({
				    source: "<?php echo base_url('birds/get_birds') ?>" 	
				  });
			});
        </script>

    </head>
    <body>
        <input type="text" id="birds" />
        <p id="text"> </p>
    </body>
</html>