<?php


require_once ("../Controle/ViewPessoaCidadeControle.php");
require_once ("../Entidade/ViewPessoaCidade.php");

if ($_GET["acao"] == "listar") {
    $pessoaCidadeControle = new ViewPessoaCidadeControle();
    print $pessoaCidadeControle->listar();
    
    
    
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

?>
