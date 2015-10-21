<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConfigPagina
 *
 * @author Daniel Santos
 */
class ConfigPagina {
     
     var $head;
     var $cabecalho;
     var $painelControle;
     var $painelOcorrecia;
     
     public function getHead() {
        return $this->head;
     }

    public function setHead($head) {
        $this->head = $head;
    }

    public function getCabecalho() {
        return $this->cabecalho;
    }

    public function setCabecalho($cabecalho) {
        $this->cabecalho = $cabecalho;
    }

    public function getPainelControle() {
        return $this->painelControle;
    }

    public function setPainelControle($painelControle) {
        $this->painelControle = $painelControle;
    }

    public function getPainelOcorrecia() {
        return $this->painelOcorrecia;
    }

    public function setPainelOcorrecia($painelOcorrecia) {
        $this->painelOcorrecia = $painelOcorrecia;
    }


}

?>
