<?php

require_once ("../AcessoDados/TipoUsuarioAcessoDados.php");
require_once ("../Entidade/TipoUsuario.php");


/**
 * Description of TipoUsuarioControle
 *
 * @author Daniel Santos
 */
class TipoUsuarioControle {
    
    public function inserir ($tipoUsuario){
        $TipoUsuarioAcessoDados = new TipoUsuarioAcessoDados();
        print $TipoUsuarioAcessoDados->inserir($tipoUsuario);
    }
    
    public function atualizar ($tipoUsuario) {
        $TipoUsuarioAcessoDados = new TipoUsuarioAcessoDados();
        return $TipoUsuarioAcessoDados->atuaizar($tipoUsuario);
    }
    
    public function excluir ($tipoUsuario) {        
        $TipoUsuarioAcessoDados = new TipoUsuarioAcessoDados();
        return $TipoUsuarioAcessoDados->excluir($tipoUsuario);
    }
    
    public function listar () {        
        $TipoUsuarioAcessoDados = new TipoUsuarioAcessoDados();
        print $TipoUsuarioAcessoDados->listar();
    }
    
    public function buscarPorCodigo ($codigo){        
        $TipoUsuarioAcessoDados = new TipoUsuarioAcessoDados();
        return $TipoUsuarioAcessoDados->buscarPorCodigo($codigo);
    }
}

?>
