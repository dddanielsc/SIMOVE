<?php

require_once ("../AcessoDados/PessoaAcessoDados.php");
require_once ("../Entidade/Pessoa.php");


/**
 * Description of PessoaControle
 *
 * @author Daniel Santos
 */
class PessoaControle {
   
    public function inserir($pessoa){
        
       $PessoaAcessoDados = new PessoaAcessoDados();
       print $PessoaAcessoDados->inserir($pessoa);
    } 
    
    public function atualizar ($pessoa){
        
        $PessoaAcessoDados = new PessoaAcessoDados();
        print $PessoaAcessoDados->atuaizar($pessoa);
    }
    
    public function excluir ($pessoa){
        
        $PessoaAcessoDados = new PessoaAcessoDados();
        print $PessoaAcessoDados->excluir($pessoa);
    }
    
    public function listar (){
        
        $PessoaAcessoDados = new PessoaAcessoDados();
        print $PessoaAcessoDados->listar();
    }
    
    public function buscarPorCodigo ($codigo){
        
        $PessoaAcessoDados = new PessoaAcessoDados();
        print $PessoaAcessoDados->buscarPorCodigo($codigo);
    }
}


?>
