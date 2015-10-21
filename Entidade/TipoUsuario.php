<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoUsuario
 *
 * @author Daniel Santos
 */
class TipoUsuario {
    
    var $codTipoUsuario;
    var $tipo;
    var $admin;
    var $espcTipo;
    
    public function getCodTipoUsuario() {
        return $this->codTipoUsuario;
    }

    public function setCodTipoUsuario($codTipoUsuario) {
        $this->codTipoUsuario = $codTipoUsuario;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getAdmin() {
        return $this->admin;
    }

    public function setAdmin($admin) {
        $this->admin = $admin;
    }

    public function getEspcTipo() {
        return $this->espcTipo;
    }

    public function setEspcTipo($espcTipo) {
        $this->espcTipo = $espcTipo;
    }


}

?>
