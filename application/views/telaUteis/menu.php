<style>
    .ui-menu { position: absolute; width: 100px; }
</style>
<script>
    $(function () {
        $("#rerun")
                .button()
                .click(function () {
                    alert("Running the last action");
                })
                .next()
                .button({
                    text: false,
                    icons: {
                        primary: "ui-icon-triangle-1-s"
                    }
                })
                .click(function () {
                    var menu = $(this).parent().next().show().position({
                        my: "left top",
                        at: "left bottom",
                        of: this
                    });
                    $(document).one("click", function () {
                        menu.hide();
                    });
                    return false;
                })
                .parent()
                .buttonset()
                .next()
                .hide()
                .menu();
    });
</script>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sistema de Estacionamento</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><?php echo anchor('Inicio/', ' Inicio') ?><span class="sr-only">(current)</span></li>
                <li><?php echo anchor('gerenciador/entrada', IconsUtil::getIcone("glyphicon-circle-arrow-up") . ' Entrada') ?></li>
                <li><?php echo anchor('gerenciador/saida', IconsUtil::getIcone("glyphicon-circle-arrow-down") . ' Saída') ?></li> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo IconsUtil::getIcone("glyphicon-wrench") ?> Área Adminstrativa<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo anchor('usuario/cadastrar', IconsUtil::getIcone(IconsUtil::ICON_USER) . ' Usuário') ?></li>
                        <li><?php echo anchor('veiculo/cadastrar', IconsUtil::getIcone(IconsUtil::ICON_PLUS_SING) . ' Veiculo') ?></li>
                        <li><?php echo anchor('veiculo/cadastarCategoria', IconsUtil::getIcone(IconsUtil::ICON_PLUS_SING) . ' Categoria') ?></li>
                        <li class="divider"></li>
                        <li>
                            <a> Caixa </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Relátorios</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><?php echo IconsUtil::getIcone(IconsUtil::ICON_INFO_SING) . ' '; ?> Ajuda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->nome; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo anchor('usuario/update', IconsUtil::getIcone(IconsUtil::ICON_PENCIL) . ' Editar Dados') ?></li>
                        <li><a href="#"><?php echo IconsUtil::getIcone(IconsUtil::ICON_COG); ?> Configurações</a></li>
                        <li class="divider"></li>
                        <li><?php echo anchor('usuario/logout', IconsUtil::getIcone(IconsUtil::ICON_OFF) . ' Sair') ?></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>