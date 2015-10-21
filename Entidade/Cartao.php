<?php


/**
 * Description of Cartao
 *
 * @author Daniel Santos
 */
class Cartao {
    
     var $codCartao;
     var $codVeiculo;
     var $codPessoa;
     
     
     public function getCodCartao() {
         return $this->codCartao;
     }

     public function setCodCartao($codCartao) {
         $this->codCartao = $codCartao;
     }

     public function getCodVeiculo() {
         return $this->codVeiculo;
     }

     public function setCodVeiculo($codVeiculo) {
         $this->codVeiculo = $codVeiculo;
     }

     public function getCodPessoa() {
         return $this->codPessoa;
     }

     public function setCodPessoa($codPessoa) {
         $this->codPessoa = $codPessoa;
     }


}

?>
