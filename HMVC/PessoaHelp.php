<?php

require_once '../Controle/PessoaControle.php';
require_once '../Entidade/Pessoa.php';
//Getting records (listAction)
if ($_GET["acao"] == "listar") {
    $pessoaControle = new PessoaControle();
    print $pessoaControle->listar();
    
}
//Creating a new record (createAction)
else if ($_GET["acao"] == "criar") {
    $pessoaControle = new PessoaControle();
    $entidade = new Pessoa();
    
    
    $entidade->setNome($_POST['nome']);
    $entidade->setEmail($_POST['email']);
    $entidade->setTel($_POST['tel']);
    $entidade->setEndereco($_POST['endereco']);
    $entidade->setCodCidade($_POST['cidade_codCidade']);
    
    print $pessoaControle->inserir($entidade);
}
//Updating a record (updateAction)
else if ($_GET["acao"] == "editar") {
   $pessoaControle = new PessoaControle();
   $entidade = new Pessoa();
   
   $entidade->setNome($_POST['nome']);
   $entidade->setEmail($_POST['email']);
   $entidade->setTel($_POST['tel']);
   $entidade->setEndereco($_POST['endereco']);
   $entidade->setCodCidade($_POST['cidade_codCidade']);
   
   
   print $pessoaControle->atualizar($entidade);
}
//Deleting a record (deleteAction)
else if ($_GET["acao"] == "deletar") {
    $tipoUsuarioBLL = new TipoUsuarioControle();
    $entidade = new TipoUsuario();
    $entidade->setCodTipoUsuario($_POST['codTipoUsuario']);
    
    print $tipoUsuarioBLL->excluir($entidade);
}

    /*
    //Get records from database
    $result = mysql_query("SELECT * FROM cartaoentrada;");

    //Add all records to an array
    $rows = array();
    while ($row = mysql_fetch_array($result)) {
        $rows[] = $row;
    }

    //Return result to jTable
    $jTableResult = array();
    $jTableResult['Result'] = "OK";
    $jTableResult['Records'] = $rows;
    print json_encode($jTableResult);
     */

?>
