<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("../Controle/ViewCartaoNomePessoaControle.php");
require_once ("../Entidade/ViewCartaoNomePessoa.php");
//Getting records (listAction)
if ($_GET["acao"] == "listar") {
    $cartaoNomePessoaBLL = new ViewCartaoNomePessoaControle();
    print $cartaoNomePessoaBLL->listar();
    
    
    
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
