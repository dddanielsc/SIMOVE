<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cidade
 *
 * @author Daniel Santos
 */
class Cidade {
    
    var $codCidade;
    var $cidade;
    var $codEstado;
    
    public function getCodCidade() {
        return $this->codCidade;
    }

    public function setCodCidade($codCidade) {
        $this->codCidade = $codCidade;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getCodEstado() {
        return $this->codEstado;
    }

    public function setCodEstado($codEstado) {
        $this->codEstado = $codEstado;
    }


}

?>
