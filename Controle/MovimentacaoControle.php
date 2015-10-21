<?php

require_once ("../AcessoDados/MovimentacaoAcessoDados.php");
require_once ("../Entidade/Movimentacao.php");

/**
 * Description of MovimentacaoControle
 *
 * @author Daniel Santos
 */
class MovimentacaoControle {
    
    public function inserir ($movimentacao){
        
        $MovimentacaoAcessoDados = new MovimentacaoAcessoDados();
        print $MovimentacaoAcessoDados->inserir($movimentacao);
    }
    
    public function atualizar ($movimentacao){
        
        $MovimentacaoAcessoDados = new MovimentacaoAcessoDados();
        print $MovimentacaoAcessoDados->atuaizar($movimentacao);
    }
    
    public function excluir ($movimentacao){
        
        $MovimentacaoAcessoDados = new MovimentacaoAcessoDados();
        print $MovimentacaoAcessoDados->excluir($movimentacao);
    }
    
    public function listar (){
        
        $MovimentacaoAcessoDados = new MovimentacaoAcessoDados();
        return $MovimentacaoAcessoDados->listar();
    }
    
    public function buscarPorCodigo ($codigo){
        
        $MovimentacaoAcessoDados = new MovimentacaoAcessoDados();
        return $MovimentacaoAcessoDados->buscarPorCodigo($codigo);
    }
}

?>
