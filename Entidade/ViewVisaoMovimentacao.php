<?php



/**
 * Description of ViewVisaoMovimentacao
 *
 * @author Daniel Santos
 */
class ViewVisaoMovimentacao {
  
    var $regMovimentacao;
    var $entradaSaida;
    var $placa;
    var $usuario;
    
    public function getRegMovimentacao() {
        return $this->regMovimentacao;
    }

    public function setRegMovimentacao($regMovimentacao) {
        $this->regMovimentacao = $regMovimentacao;
    }

    public function getEntradaSaida() {
        return $this->entradaSaida;
    }

    public function setEntradaSaida($entradaSaida) {
        $this->entradaSaida = $entradaSaida;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }


}

?>
