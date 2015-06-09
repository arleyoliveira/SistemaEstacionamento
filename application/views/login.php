<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta htpp-equiv="Contente-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Sistema de Gestão de Estacionamento</title>

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
        <script src="<?php echo base_url('includes/jquery/jquery-2.1.4.min.js') ?>"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/signin.css') ?>">

        <!-- My css -->
        <link rel="stylesheet" href="<?php echo base_url('includes/my_css/style.css') ?>">

        <script src="<?php echo base_url('includes/my_js/jquery.maskedinput.js') ?>"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js') ?>"></script>

        <link rel="stylesheet" href="<?php echo base_url('includes/jquery1/jquery-ui.css') ?>">

        <script src="<?php echo base_url('includes/jquery1/jquery-ui.js') ?>"></script>

        <script src="<?php echo base_url('includes/jquery1/external/jquery/jquery.js') ?>"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        -->

    </head>

    <body>

        <div class="container">

            <form class="form-signin">
                <h2 class="form-signin-heading">Login</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="exemple@exemple.com" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembra minha senha
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
            </form>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <footer class="text-center"> 
                        <small> Sistema de Gestão de Estacionamento by </small>
                        <mark> Equipe TADS - JANUÁRIA</mark> 
                    </footer>
                </div>
            </div>

        </div>


    </body>

