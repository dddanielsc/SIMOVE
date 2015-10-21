<?php

require_once ("../AcessoDados/UsuarioAcessoDados.php");
require_once ("../Entidade/Usuario.php");


/**
 * Description of UsuarioControle
 *
 * @author Daniel Santos
 */
class UsuarioControle {
    
    public function inserir ($usuario){
        
        $UsuarioAcessoDados = new UsuarioAcessoDados();
        print $UsuarioAcessoDados->inserir($usuario);
    }
    
    public function atualizar ($usuario){
        
        $UsuarioAcessoDados = new UsuarioAcessoDados();
        print $UsuarioAcessoDados->atuaizar($usuario);
    }
    
    public function excluir ($usuario){
        
        $UsuarioAcessoDados = new UsuarioAcessoDados();
        print $UsuarioAcessoDados->excluir($usuario);
    }
    
    public function listar (){
        
        $UsuarioAcessoDados = new UsuarioAcessoDados();
        print $UsuarioAcessoDados->listar();
    }
    
    public function buscarPorCodigo ($codigo){
        
       $UsuarioAcessoDados = new UsuarioAcessoDados();
       print $UsuarioAcessoDados->buscarPorCodigo($codigo);
    }
}

?>
