<?php

require_once ("../AcessoDados/VeiculoAcessoDados.php");
require_once ("../Entidade/Veiculo.php");

/**
 * Description of VeiculoControle
 *
 * @author Daniel Santos
 */
class VeiculoControle {
    
     public function inserir($veiculo){
       
         $VeiculoAcessoDados = new VeiculoAcessoDados();
        print $VeiculoAcessoDados->inserir($veiculo);           
    }
	
    public function atuaizar($veiculo){
       
        $VeiculoAcessoDados = new VeiculoAcessoDados();
        print $VeiculoAcessoDados->atuaizar($veiculo);           
    }
	
    public function excluir($veiculo){
       
        $VeiculoAcessoDados = new VeiculoAcessoDados();
        print $VeiculoAcessoDados->excluir($veiculo);           
    }
	
    public function listar(){
       
        $VeiculoAcessoDados = new VeiculoAcessoDados();
        print $VeiculoAcessoDados->listar();           
    }

    public function buscarPorCodigo($codigo){
        
        $VeiculoAcessoDados = new VeiculoAcessoDados();
        return $VeiculoAcessoDados->buscarPorCodigo($codigo);           
    }
}

?>
