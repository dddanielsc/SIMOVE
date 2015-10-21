<?php
 

 require_once ("../AcessoDados/ViewPessoaCidadeAcessoDados.php") ;
 require_once ("../Entidade/ViewPessoaCidade.php");


/**
  * Description of V  iewPessoaCidadeControle
 *
 * @author Daniel Santos
 */
class ViewPessoaCidadeControle {
    
    public function listar (){
        $pessoaCidade = new ViewPessoaCidadeAcessoDados();
        print $pessoaCidade->listar();
    }
    
}

?>
