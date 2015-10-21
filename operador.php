<?php

require_once ("../Simove/Entidade/Usuario.php");
session_start();
if (!isset($_SESSION["usuario"]) == TRUE) {
    header('location:index.php');
} else {
    //   print_r($_SESSION);
    $u = new Usuario();
    $u = $_SESSION["usuario"];
}
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--link rel="shortcut icon" href="bootstrap/assets/ico/favicon.png"-->

        <title>SIMOVE | Painel do Usuário</title>

        <!-- Bootstrap core CSS 3.0 -->
        <link href="btsp30/css/bootstrap.css" rel="stylesheet">
        <link href="btsp30/css/bootstrap.min.css" rel="stylesheet">
        <link href="btsp30/css/bootstrap-theme.css" rel="stylesheet">
        <link href="btsp30/css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- DANIEL CSS -->
        <link href="bootstrap/css/extra.css" rel="stylesheet">

        <!-- js btsp3x -->
        <link href="btsp30/js/bootstrap.min.js" rel="stylesheet">
        <link href="btsp30/js/bootstrap.js" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../../assets/js/html5shiv.js"></script>
          <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- COMEÇO DA BARRA DE STATUS -->
        <div>
            <ul class="breadcrumb">
                <span class="brand">SIMOVE | Painel do Administrador - </span> <?= $u->getUsuario() ?> 
                <a href="logout.php"> <span> | Sair </span></a>

            </ul>
        </div>
        <!-- FIM DA BARRA DE STATUS -->

        <!-- INICIO DO PAINEL DE PESSOAS-->
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span>   Controle de Pessoas</h3>
                </div>
                <div class="panel-body">
                    <div class="div-padding imgLado">
                        <a href="#" id="gerVeiculos"><img src="icons/veiculos.png" class="img-rounded"></a>
                        <br>
                        <label>Gerenciar Veículos</label>
                    </div>    
                    <div class="div-padding imgLado">
                        <a href="#" id="operMovimentacoes"><img src="icons/movimentacao.png" class="img-rounded"></a>
                        <br>
                        <label>Movimentação</label>
                    </div> 
                </div>
                <div id="conteudoTable">
                </div>
            </div>
        </div>
        
        <link href="./Libs/themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
        <link href="./Libs/scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />

        <script src="./Libs/scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
        <script src="./Libs/scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
        <script src="./Libs/scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
        <script src="./jQuery/gerEvents.js" type="text/javascript"></script>

    </body>
</html>
