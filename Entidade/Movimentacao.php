<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Movimentacao
 *
 * @author Daniel Santos
 */
class Movimentacao {
    
     var $codMovimentacao;
     var $regMovimentacao;
     var $entradaSaida;
     var $codVeiculo;
     
     public function getCodMovimentacao() {
         return $this->codMovimentacao;
     }

     public function setCodMovimentacao($codMovimentacao) {
         $this->codMovimentacao = $codMovimentacao;
     }

     public function getRegMovimentacao() {
         return $this->regMovimentacao;
     }

     public function setRegMovimentacao($regMovimentacao) {
         $this->regMovimentacao = $regMovimentacao;
     }

     public function getEntradaSaida() {
         return $this->entradaSaida;
     }

     public function setEntradaSaida($entradaSaida) {
         $this->entradaSaida = $entradaSaida;
     }

     public function getCodVeiculo() {
         return $this->codVeiculo;
     }

     public function setCodVeiculo($codVeiculo) {
         $this->codVeiculo = $codVeiculo;
     }


     
}

?>
