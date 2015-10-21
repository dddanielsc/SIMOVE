<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ocorrencia
 *
 * @author Daniel Santos
 */
class Ocorrencia {
   
     var $codOcorrencia;
     var $ocorrencia;
     var $codPessoa;
     
     public function getCodOcorrencia() {
         return $this->codOcorrencia;
     }

     public function setCodOcorrencia($codOcorrencia) {
         $this->codOcorrencia = $codOcorrencia;
     }

     public function getOcorrencia() {
         return $this->ocorrencia;
     }

     public function setOcorrencia($ocorrencia) {
         $this->ocorrencia = $ocorrencia;
     }

     public function getCodPessoa() {
         return $this->codPessoa;
     }

     public function setCodPessoa($codPessoa) {
         $this->codPessoa = $codPessoa;
     }


}

?>
