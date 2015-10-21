<?php

require_once ("../AcessoDados/OcorrenciaAcessoDados.php");
require_once ("../Entidade/Ocorrencia.php");

/**
 * Description of OcorrenciaControle
 *
 * @author Daniel Santos
 */
class OcorrenciaControle {
    
    public function inserir ($ocorrencia){
        
        $OcorrenciaAcessoDados = new OcorrenciaAcessoDados();
        return $OcorrenciaAcessoDados->inserir($ocorrencia);
    }
    
    public function atualizar ($ocorrencia) {
        
       $OcorrenciaAcessoDados = new OcorrenciaAcessoDados();
       return $OcorrenciaAcessoDados->atuaizar($ocorrencia);
       
    }
    
    public function excluir ($ocorrencia){
        
        $OcorrenciaAcessoDados = new OcorrenciaAcessoDados();
        return $OcorrenciaAcessoDados->excluir($ocorrencia);
    }
    
    public function listar (){
        
        $OcorrenciaAcessoDados = new OcorrenciaAcessoDados();
        return $OcorrenciaAcessoDados->listar();
        
    }
    
    public function buscarPorCodigo ($codigo){
        
        $OcorrenciaAcessoDados = new OcorrenciaAcessoDados();
        return $OcorrenciaAcessoDados->buscarPorCodigo($codigo);
    }
}

?>
