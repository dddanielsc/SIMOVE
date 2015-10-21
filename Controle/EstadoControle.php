<?php

require_once ("../AcessoDados/EstadoAcessoDados.php");
require_once ("../Entidade/Estado.php");

/**
 * Description of EstadoControle
 *
 * @author Daniel Santos
 */
class EstadoControle {
    
    public function inserir ($estado){
        
        $EstadoAcessoDados = new EstadoAcessoDados();
        return $EstadoAcessoDados->inserir($estado);
    }
    
    public function atualizar ($estado){
        
         $EstadoAcessoDados = new EstadoAcessoDados();
         return $EstadoAcessoDados->atuaizar($estado);
    }
    
    public function excluir ($estado){
        
         $EstadoAcessoDados = new EstadoAcessoDados();
         return $EstadoAcessoDados->excluir($estado);
    }
    
    public function listar () {
        
         $EstadoAcessoDados = new EstadoAcessoDados();
         return $EstadoAcessoDados->listar();
    }
    
    public function buscarPorCodigo ($codigo) {
        
         $EstadoAcessoDados = new EstadoAcessoDados();
         return $EstadoAcessoDados->buscarPorCodigo($codigo);
    }
}

?>
