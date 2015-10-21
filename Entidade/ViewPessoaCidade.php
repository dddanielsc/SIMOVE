<?php


class ViewPessoaCidade {
    
    var $codCidade;
    var $nome;
    var $email;
    var $telefone;
    var $endereco;
    var $cidade;
    
    
    public function getCodCidade() {
        return $this->codCidade;
    }

    public function setCodCidade($codCidade) {
        $this->codCidade = $codCidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }


}

?>
