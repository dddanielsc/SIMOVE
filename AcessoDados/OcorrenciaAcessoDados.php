<?php

require_once ("../Entidade/Ocorrencia.php");
require_once ("../Configuracao/ConexaoDB.php");


/**
 * Description of OcorrenciaAcessoDados
 *
 * @author Daniel Santos
 */
class OcorrenciaAcessoDados {
   
     public function inserir ($ocorrencia){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "INSERT INTO usuario (ocorrencia, usuario_pessoa_codPessoa)
               VALUES ('" . $ocorrencia->getOcorrencia() . "' ,
                       '" . $ocorrencia->getCodPessoa() ." );";
           
           
           $resultado = mysql_query($query);
           $resultado = mysql_query("SELECT LAST_INSERT_ID AS codOcorrencia;");
           $linha = mysql_fetch_row($resultado);
           ConexaoDB::desconectar($con);
           
           return $linha[0];
       }  catch (Exception $ex){
           return 0;
       }
   }
   
   public function atuaizar ($ocorrencia){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "UPDATE ocorrencia SET 
                        ocorrencia = '" . $ocorrencia->getUsuario() . "' ,
                        usuario_pessoa_codPessoa = " . $ocorrencia->getStatus() ."' ,
                     WHERE codOcorrencia = " . $ocorrencia->getCodOcorrencia() . ";";
          
           $resultado = mysql_query($query);
           ConexaoDB::desconectar($con);
           
           return $ocorrencia->getCodOcorrencia();
           
           }catch(Exception $ex){
               return 0;
           }
   }
   
   public function excluir($ocorrencia){
       try{
           $con = ConexaoDB::conectar();
           $query = "DELETE FROM ocorrencia 
                     WHERE codOcorrencia = " . $ocorrencia->getCodOcorrencia() .";";
           
           $resultado = mysql_query($query);
           ConexaoDB::desconectar($con);
           return $ocorrencia->getCodOcorrencia();
                      
       }  catch (Exception $ex ){
           return 0;
       }
   }
   
   public function listar(){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "SELECT * FROM ocorrencia";
           $resultado = mysql_query($query);
           
           $tuplas = array();
           while ($tupla = mysql_fetch_array($resultado)){
               $tuplas[] = $tupla;
           }
           
           ConexaoDB::desconectar($con);
           return $tuplas;
       }  catch (Exception $exc){
           return 0;
       }
   }
   
   public function buscarPorCodigo($codigo){
        try {
            
            $con = ConexaoDB::conectar();
            
            $query = "SELECT * FROM ocorrencia 
                      WHERE codOcorrencia = " . $codigo . ";"; 
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
