<?php

    require_once '../Entidade/Pessoa.php';
    require_once '../Controle/PessoaControle.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--link rel="shortcut icon" href="bootstrap/assets/ico/favicon.png"-->

    <title>SIMOVE | Cadastro de Usuário</title>


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

  <body id="bgGradienteCinza">
      <!-- COMEÇO DA BARRA DE STATUS -->
      <div>
        <ul class="breadcrumb">
            <span class="brand">SIMOVE | Pré-cadastro | <a href="index.php">Início </a>- </span> 
        </ul>
      </div>
      <!-- FIM DA BARRA DE STATUS -->
      
      <!-- INICIO DO FORMULÁRIO-->
      <div class="container">
          <h3><span class="label label-default">Cadastro de Pessoas</span></h3>
          
          <form class="form-horizontal" role="form" action="AdicionarUsuario.php"  method="post">
            <div class="col-md-4 ">
                <br>
                <input type="text" class="form-control" placeholder="Nome" name="nomePessoa">
                <br>
                <input type="email" class="form-control" placeholder="e-mail" name="emailPessoa">
                <br>
                <input type="text" class="form-control" placeholder="telefone" name="telPessoa">
                <br>
                <input type="text" class="form-control" placeholder="endereço" name="enderecoPessoa">
                <br>
                <select multiple class="form-control">
                <?php
                    $dados = array();
                    $dados = $cidadeControle->listar();
                    while ($dados){
                         $i = 0;
                         echo (" <option>" . $dados[$i] . "</option>");
                         $i++;
                    }
                ?>   
                </select>
                <br>
                <button type="submit" class="btn btn-success" >Salvar</button>

           </div>
          </form>
      </div>
      
  </body>
</html>
