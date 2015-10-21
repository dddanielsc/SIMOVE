<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author Daniel Santos
 */
class Pessoa {
    
    var $codPessoa;
    var $nome;
    var $email;
    var $tel;
    var $endereco;
    var $codCidade;
    
    public function getCodPessoa(){
        return $this->codPessoa;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nomePessoa){
        $this->nome = $nomePessoa;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail ($email){
        $this->email = $email;
    }
    public function getTel(){
        return $this->tel;
    }
    public function setTel($telefone){
        $this->tel = $telefone;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getCodCidade(){
        return $this->codCidade;
    }
    public function setCodCidade($codCidade){
        $this->codCidade = $codCidade;
    }
}

?>
