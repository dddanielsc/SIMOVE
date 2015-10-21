<?php

require_once ("../AcessoDados/CartaoAcessoDados.php");
require_once ("../Entidade/Cartao.php");


/**
 * Description of CartaoControle
 *
 * @author Daniel Santos
 */
class CartaoControle {
    
    public function inserir($cartao){
        
        $CartaoAcessoDados = new CartaoAcessoDados();
        return $CartaoAcessoDados->inserir($cartao);
    }
    
    public function atualizar($cartao){
        
        $CartaoAcessoDados = new CartaoAcessoDados();
        return $CartaoAcessoDados->atuaizar($cartao);
    }
    
    public function excluir ($cartao){
        
        $CartaoAcessoDados = new CartaoAcessoDados();
        return $CartaoAcessoDados->excluir($cartao);
    }
    
    public function listar (){
        
        $CartaoAcessoDados = new CartaoAcessoDados();
        return $CartaoAcessoDados->listar();
    }
    
    public function buscarPorCodigo ($codigo){
        
        $CartaoAcessoDados = new CartaoAcessoDados();
        return $CartaoAcessoDados->buscarPorCodigo($codigo);
    }
}

?>
