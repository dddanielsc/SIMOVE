<?php

require_once '../Controle/MovimentacaoControle.php';
require_once '../Entidade/Movimentacao.php';


//Getting records (listAction)
if ($_GET["acao"] == "listar") {
    $movimentacaoControle = new MovimentacaoControle();
    print $movimentacaoControle->listar();
    
}
//Creating a new record (createAction)
else if ($_GET["acao"] == "criar") {
    $movimentacaoControle = new MovimentacaoControle();
    $entidade = new Movimentacao();
    
    //$entidade->setCodMovimentacao($_POST['codMovimentacao']);
    //$entidade->setRegMovimentacao($_POST['regMovimentacao']);
    $entidade->setRegMovimentacao(date("d/m/y h:i"));    
    $entidade->setEntradaSaida($_POST['entradaSaida']);
    $entidade->setCodVeiculo($_POST['veiculo_codVeiculo']);
    
    print $movimentacaoControle->inserir($entidade);
}
//Updating a record (updateAction)
else if ($_GET["acao"] == "editar") {
    $movimentacaoControle = new MovimentacaoControle();
    $entidade = new Movimentacao();
    
    $entidade->setCodMovimentacao($_POST['codMovimentacao']);
    $entidade->setRegMovimentacao($_POST['regMovimentacao']);
    $entidade->setEntradaSaida($_POST['entradaSaida']);
    $entidade->setCodVeiculo($_POST['veiculo_codVeiculo']);
    
   print $movimentacaoControle->atualizar($entidade);
}
//Deleting a record (deleteAction)
else if ($_GET["acao"] == "deletar") {
    $movimentacaoControle = new MovimentacaoControle();
    $entidade = new Movimentacao();
    
    $entidade->setCodMovimentacao($_POST['codMovimentacao']);
    
     print $movimentacaoControle->excluir($entidade);
}

?>
