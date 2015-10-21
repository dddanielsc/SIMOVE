<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author Daniel Santos
 */
class ViewCartaoNomePessoa {
    
    var $codCartao;
    var $nomePessoa;
    
    public function getCodCartao() {
        return $this->codCartao;
    }

    public function setCodCartao($codCartao) {
        $this->codCartao = $codCartao;
    }

    public function getNomePessoa() {
        return $this->nomePessoa;
    }

    public function setNomePessoa($nomePessoa) {
        $this->nomePessoa = $nomePessoa;
    }
    
}

?>
