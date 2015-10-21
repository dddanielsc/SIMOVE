<?php

require_once ("../AcessoDados/CidadeAcessoDados.php");
require_once ("../Entidade/Cidade.php");

/**
 * Description of CidadeControle
 *
 * @author Daniel Santos
 */
class CidadeControle {
   
    public function inserir($cidade){
        
        $CidadeAcessoDados = new $CidadeAcessoDados();
        return $CidadeAcessoDados->inserir($cidade);           
    }
	
    public function atualizar ($cidade){
        
         $CidadeAcessoDados = new $CidadeAcessoDados();
         return $CidadeAcessoDados->atuaizar($cidade);
    }
    
    public function excluir ($cidade){
        
         $CidadeAcessoDados = new $CidadeAcessoDados();
         return  $CidadeAcessoDados->excluir($cidade);
    }
    
    public function listar (){
        
         $CidadeAcessoDados = new $CidadeAcessoDados();
         return $CidadeAcessoDados->listar();
    }
    
    public function buscarPorCodigo ($codigo){
        
         $CidadeAcessoDados = new $CidadeAcessoDados();
         return $CidadeAcessoDados->buscarPorCodigo($codigo);
    }
}


?>
