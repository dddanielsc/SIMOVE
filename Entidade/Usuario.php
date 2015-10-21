<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioIfes
 *
 * @author Daniel Santos
 */
class Usuario {
    
    var $pessoa_codPessoa;
    var $usuario;
    var $senha;
    var $status;
    var $codTipo;
    
    public function getPessoa_codPessoa() {
        return $this->codPessoa;
    }

    public function setPessoa_codPessoa($codPessoa) {
        $this->codPessoa = $codPessoa;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getCodTipo() {
        return $this->codTipo;
    }

    public function setCodTipo($codTipo) {
        $this->codTipo = $codTipo;
    }


}


?>
