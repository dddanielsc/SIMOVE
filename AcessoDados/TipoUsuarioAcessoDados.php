<?php

require_once ("../Entidade/TipoUsuario.php");
require_once ("../Configuracao/ConexaoDB.php");

/**
 * Description of TipoUsuarioAcessoDados
 *
 * @author Daniel Santos
 */
class TipoUsuarioAcessoDados {

    public function inserir($tipoUsuario) {
        try {
            $con = ConexaoDB::conectar();

            $query = "INSERT INTO tipousuario (tipo, admin, especTipo)
               VALUES ('" . $tipoUsuario->getTipo() . "' ,
                       " . $tipoUsuario->getAdmin() . ", 
                        '" . $tipoUsuario->getEspcTipo() . "');";


            $resultado = mysql_query($query);
            
            $resultado = mysql_query("SELECT * FROM tipousuario WHERE codTipoUsuario = LAST_INSERT_ID();");
            $linha = mysql_fetch_array($resultado);
          
            
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            $jTableResult['Record'] = $linha;
            print json_encode($jTableResult);
            ConexaoDB::desconectar($con);

            //print $linha[0];
        } catch (Exception $ex) {
            return 0;
        }
    }

    public function atuaizar($tipoUsuario) {
        try {
            $con = ConexaoDB::conectar();

            $query = "UPDATE tipousuario SET 
                        tipo = '" . $tipoUsuario->getUsuario() . "' ,
                        admin = " . $tipoUsuario->getSenha() . ",
                        EspecTipo = '" . $tipoUsuario->getStatus() . "' ,
                     WHERE codTipoUsuario = " . $tipoUsuario->getCodTipoUsuario() . ";";

            $resultado = mysql_query($query);
            ConexaoDB::desconectar($con);

            return $tipoUsuario->getCodTipoUsuario();
        } catch (Exception $ex) {
            return 0;
        }
    }

    public function excluir($tipoUsuario) {
        try {
            $con = ConexaoDB::conectar();
            $result = mysql_query("DELETE FROM tipousuario WHERE codTipoUsuario = " . $tipoUsuario->getCodTipoUsuario() . ";");
            
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            print json_encode($jTableResult);
            
            ConexaoDB::desconectar($con);
            
        } catch (Exception $ex) {
            return 0;
        }
    }

    public function listar() {
        try {
            $con = ConexaoDB::conectar();

            $query = "SELECT * FROM tipousuario";
            $resultado = mysql_query($query);

            $tuplas = array();
            while ($tupla = mysql_fetch_array($resultado)) {
                $tuplas[] = $tupla;
            }
            ConexaoDB::desconectar($con);
            $result = array();
            $result['Result'] = "OK";
            $result['Records'] = $tuplas;
            
            print json_encode($result);
            
        } catch (Exception $exc) {
            return 0;
        }
    }

    public function buscarPorCodigo($codigo) {
        try {

            $con = ConexaoDB::conectar();

            $query = "SELECT * FROM tipousuario 
                      WHERE codTipoUsuario = " . $codigo . ";";
            $resultado = mysql_query($query);

            $tuplas = array();
            while ($tupla = mysql_fetch_array($resultado)) {
                $tuplas[] = $tupla;
            }

            ConexaoDB::desconectar($con);
            return $tuplas;
        } catch (Exception $exc) {
            return $tuplas;
        }
    }

}

?>
