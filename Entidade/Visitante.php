<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Visitante
 *
 * @author Daniel Santos
 */
class Visitante {
    
    var $codVisitante;
    var $nome;
    var $cnh;
    var $cpf;
    var $finalidade;
    var $codMovimentação;
    
    public function getCodVisitante() {
        return $this->codVisitante;
    }

    public function setCodVisitante($codVisitante) {
        $this->codVisitante = $codVisitante;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCnh() {
        return $this->cnh;
    }

    public function setCnh($cnh) {
        $this->cnh = $cnh;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getFinalidade() {
        return $this->finalidade;
    }

    public function setFinalidade($finalidade) {
        $this->finalidade = $finalidade;
    }

    public function getCodMovimentação() {
        return $this->codMovimentação;
    }

    public function setCodMovimentação($codMovimentação) {
        $this->codMovimentação = $codMovimentação;
    }


    
    
}

?>
