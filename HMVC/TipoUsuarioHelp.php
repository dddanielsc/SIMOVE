<?php
require_once '../Controle/TipoUsuarioControle.php';
require_once '../Entidade/TipoUsuario.php';
//Getting records (listAction)
if ($_GET["acao"] == "listar") {
    $tipoUsuarioBLL = new TipoUsuarioControle();
    print $tipoUsuarioBLL->listar();
    
    
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
}
//Creating a new record (createAction)
else if ($_GET["acao"] == "criar") {
    $tipoUsuarioBLL = new TipoUsuarioControle();
    $entidade = new TipoUsuario();
        
    $entidade->setTipo($_POST['tipo']);
    $entidade->setAdmin($_POST['admin']);
    $entidade->setEspcTipo($_POST['EspecTipo']);
    
    print $tipoUsuarioBLL->inserir($entidade);
}
//Updating a record (updateAction)
else if ($_GET["acao"] == "editar") {
    $tipoUsuarioBLL = new TipoUsuarioControle();
    $tipoUsuarioBLL->listar();
}
//Deleting a record (deleteAction)
else if ($_GET["acao"] == "deletar") {
    $tipoUsuarioBLL = new TipoUsuarioControle();
    $entidade = new TipoUsuario();
    $entidade->setCodTipoUsuario($_POST['codTipoUsuario']);
    
    print $tipoUsuarioBLL->excluir($entidade);
}
?>
