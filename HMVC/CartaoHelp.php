
<?php
require_once '../Controle/CartaoControle.php';
require_once '../Entidade/Cartao.php';
//Getting records (listAction)
if ($_GET["acao"] == "listar") {
    $cartaoBLL = new CartaoControle();
    print $cartaoBLL->listar();
    
    
    
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
    $cartaoBLL = new CartaoControle();
    $entidade = new Cartao();
    $entidade->codCartao($_POST['Cartao']); //PAREI AQUI, INSERIR VIEW
    $entidade->codPessoa($_POST['EspecTipo']);
    $entidade->setTipo($_POST['tipo']);
    
    print $tipoUsuarioBLL->inserir($entidade);
}
//Updating a record (updateAction)
else if ($_GET["acao"] == "ediar") {
    $tipoUsuarioBLL = new TipoUsuarioControle();
    $tipoUsuarioBLL->listar();
}
//Deleting a record (deleteAction)
else if ($_GET["acao"] == "deletar") {
    $tipoUsuarioBLL = new TipoUsuarioControle();
    $tipoUsuarioBLL->listar();
}

?>
