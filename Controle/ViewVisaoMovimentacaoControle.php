<?php

require_once ("../AcessoDados/ViewVisaoMovimentacaoAcessoDados.php") ;
require_once ("../Entidade/ViewVisaoMovimentacao.php");

/**
 * Description of ViewVisaoMovimentacaoControle
 *
 * @author Daniel Santos
 */
class ViewVisaoMovimentacaoControle {
    
    public function listar (){
        $visaoMovimentacao = new ViewVisaoMovimentacaoAcessoDados();
        print $visaoMovimentacao->listar();
    }
}

?>
