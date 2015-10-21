<?php

require_once ("../AcessoDados/VisitantesAcessoDados.php");
require_once ("../Entidade/Visitante.php");

/**
 * Description of VisitanteControle
 *
 * @author Daniel Santos
 */
class VisitanteControle {
   
    public function inserir($visitante){
        
        $VisitanteAcessoDados = new VisitantesAcessoDados();
        return $VisitanteAcessoDados->inserir($visitante);           
    }
	
    public function atualizar($visitante){
        
        $VisitanteAcessoDados = new VisitantesAcessoDados();
        return $VisitanteAcessoDados->atualizar($visitante);           
    }
	
    public function excluir($visitante){
       
        $VisitanteAcessoDados = new VisitantesAcessoDados();
        return $VisitanteAcessoDados->excluir($visitante);           
    }
	
    public function listar(){
        
        $VisitanteAcessoDados = new VisitantesAcessoDados();
        return $VisitanteAcessoDados->listar();           
    }

    public function buscarPorCodigo($codigo){
        
        $VisitanteAcessoDados = new VisitantesAcessoDados();
        return $VisitanteAcessoDados->buscarPorCodigo($codigo);           
    }
}

?>
