<?php

require_once '../Controle/ViewVisaoMovimentacaoControle.php';
require_once '../Entidade/ViewVisaoMovimentacao.php';

if ($_GET["acao"] == "listar") {
    $visaoMovimentacao = new ViewVisaoMovimentacaoControle();
    print $visaoMovimentacao->listar();
    
}


?>
