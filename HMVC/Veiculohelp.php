<?php

require_once '../Controle/VeiculoControle.php';
require_once '../Entidade/Veiculo.php';


//Getting records (listAction)
if ($_GET["acao"] == "listar") {
    $veiculoControle = new VeiculoControle();
    print $veiculoControle->listar();
    
}
//Creating a new record (createAction)
else if ($_GET["acao"] == "criar") {
    $veiculoControle = new VeiculoControle();
    $entidade = new Veiculo();
    
    
    $entidade->setModelo($_POST['modelo']);
    $entidade->setPlaca($_POST['placa']);
    $entidade->setMarca($_POST['marca']);
    
    print $veiculoControle->inserir($entidade);
}
//Updating a record (updateAction)
else if ($_GET["acao"] == "editar") {
    $veiculoControle = new VeiculoControle();
    $entidade = new Veiculo();
    
    //$entidade->setCodVeiculo($_POST['codVeiculo']);
    $entidade->setModelo($_POST['modelo']);
    $entidade->setPlaca($_POST['placa']);
    $entidade->setMarca($_POST['marca']);
    
    print $veiculoControle->atuaizar($entidade);
}
//Deleting a record (deleteAction)
else if ($_GET["acao"] == "deletar") {
    $veiculoControle = new VeiculoControle();
    $entidade = new Veiculo();
    $entidade->setCodVeiculo($_POST['codVeiculo']);
    
    print $veiculoControle->excluir($entidade);
}

?>
