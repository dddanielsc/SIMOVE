<?php
    
    require_once ("../Simove/Entidade/Usuario.php");
    session_start();
    if(!isset($_SESSION["usuario"]) == TRUE){
        header ('location:index.php');
    }else{
     //   print_r($_SESSION);
        $u = new Usuario();
        $u = $_SESSION["usuario"];
    }

?>

<!DOCTYPE html>
<html lang="en">
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
            <span class="brand">SIMOVE | Painel do Administrador - </span> <?=$u->getUsuario()?>
            <a href="logout.php"><i class="icon-off pull-right"></i></a>
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
            <div class="div-padding">
     
                <a href="CadastroUsuario.php"><img src="icons/novousuario.png" class="img-rounded"></a>
                
            </div>
          </div>
        </div>
      </div>
    
  </body>
</html>