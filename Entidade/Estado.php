<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estado
 *
 * @author Daniel Santos
 */
class Estado {
    
    var $codEstado;
    var $estado;
    
    public function getCodEstado() {
        return $this->codEstado;
    }

    public function setCodEstado($codEstado) {
        $this->codEstado = $codEstado;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }


}

?>
