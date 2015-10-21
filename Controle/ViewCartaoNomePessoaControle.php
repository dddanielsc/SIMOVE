<?php

require_once ("../AcessoDados/ViewCartaoNomePessoaAcessoDados.php");
require_once ("../Entidade/ViewCartaoNomePessoa.php");
/**
 * Description of ViewCartaoNomePessoaControle
 *
 * @author Daniel Santos
 */
class ViewCartaoNomePessoaControle {
    
    public function listar (){
        $CartaoNomePessoa = new ViewCartaoNomePessoaAcessoDados();
        print $CartaoNomePessoa->listar();
    }
}

?>
