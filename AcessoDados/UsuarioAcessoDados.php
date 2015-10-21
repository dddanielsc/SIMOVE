<?php

require_once ("../Entidade/Usuario.php");
require_once ("../Configuracao/ConexaoDB.php");

/**
 * Description of UsuarioAcessoDados
 *
 * @author Daniel Santos
 */
class UsuarioAcessoDados {
   public function inserir ($usuario){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "INSERT INTO usuario (pessoa_codPessoa, usuario, senha, ativo, 
                                         tipoUsuario_codTipoUsuario)
               VALUES ( " . $usuario->getPessoa_codPessoa() . ",
                       '" . $usuario->getUsuario() . "' ,
                       '" . $usuario->getSenha() . "', 
                        " . $usuario->getStatus() ." ,
                        " . $usuario->getCodTipo() ." );";
           
           
           $resultado = mysql_query($query);
           $resultado = mysql_query("SELECT * FROM usuario WHERE pessoa_codPessoa = LAST_INSERT_ID();");
           $linha = mysql_fetch_array($resultado);
           
          
           $jTableResult = array();
           $jTableResult['Result'] = "OK";
           $jTableResult['Record'] = $linha;
           print json_encode($jTableResult);
           ConexaoDB::desconectar($con);
           
           //return $linha[0];
       }  catch (Exception $ex){
           return 0;
       }
   }
   
   public function atuaizar ($usuario){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "UPDATE usuario SET 
                        nome = '" . $usuario->getUsuario() . "' ,
                        senha = '" . $usuario->getSenha() . "' ,
                        status = " . $usuario->getStatus() . " ,
                        tipoUsuario_codTipoUsuario= '" . $usuario->getCodTipo() . "' ,
                     WHERE pessoa_codPessoa = " . $usuario->getPessoa_codPessoa() . ";";
          
           $resultado = mysql_query($query);
           $resultado = mysql_query("SELECT * FROM usuario WHERE pessoa_codPessoa = LAST_INSERT_ID();");
            
           $jTableResult = array();
           $jTableResult['Result'] = "OK";
           print json_encode($jTableResult);
           
           
           ConexaoDB::desconectar($con);
           
           //return $usuario->getCodPessoa();
           
           }catch(Exception $ex){
               return 0;
           }
   }
   
   public function excluir($usuario){
       try{
           $con = ConexaoDB::conectar();
           $query = "DELETE FROM usuario 
                     WHERE pessoa_codPessoa = ". $usuario->getPessoa_codPessoa() .";";
           
           $resultado = mysql_query($query);
           
           $jTableResult = array();
           $jTableResult['Result'] = "OK";
           print json_encode($jTableResult);
           ConexaoDB::desconectar($con);
           
           
           //return $usuario->getCodPessoa();
                      
       }  catch (Exception $ex ){
           return 0;
       }
   }
   
   public function listar(){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "SELECT * FROM usuario";
           $resultado = mysql_query($query);
           
           $tuplas = array();
           while ($tupla = mysql_fetch_array($resultado)){
               $tuplas[] = $tupla;
           }
           
           ConexaoDB::desconectar($con);
          
           
            $result = array();
            $result['Result'] = "OK";
            $result['Records'] = $tuplas;
            print json_encode($result);
           
            //return $tuplas;
       }  catch (Exception $exc){
           return 0;
       }
   }
   
   public function buscarPorCodigo($codigo){
        try {
            
            $con = ConexaoDB::conectar();
            
            $query = "SELECT * FROM usuario 
                      WHERE pessoa_codPessoa = " . $codigo . ";"; 
            $resultado = mysql_query($query);
            
            $tuplas = array();
            while ($tupla = mysql_fetch_array($resultado)){
               $tuplas[] = $tupla;
           }
           
           ConexaoDB::desconectar($con);
           return $tuplas;
            
        }  catch (Exception $exc){
            return $tuplas;
        }
   }
}

?>
