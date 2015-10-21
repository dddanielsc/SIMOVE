<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Veiculo
 *
 * @author Daniel Santos
 */
class Veiculo {
    
    var $codVeiculo;
    var $modelo;
    var $placa;
    var $marca;
    
    public function getCodVeiculo() {
        return $this->codVeiculo;
    }

    public function setCodVeiculo($codVeiculo) {
        $this->codVeiculo = $codVeiculo;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }


}

?>
