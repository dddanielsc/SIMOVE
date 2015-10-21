<?php

require_once ("../Entidade/Cidade.php");
require_once ("../Configuracao/ConexaoDB.php");

/**
 * Description of CidadeAcessoDados
 *
 * @author Daniel Santos
 */
class CidadeAcessoDados {
    
    public function inserir ($cidade){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "INSERT INTO cidade (cidade, estado_codEstado)
               VALUES ('". $cidade->getCidade() ."' ,
                        ". $cidade->getCodEstado() .");";
           
           
           $resultado = mysql_query($query);
           $resultado = mysql_query("SELECT LAST_INSERT_ID AS codCidade;");
           $linha = mysql_fetch_row($resultado);
           ConexaoDB::desconectar($con);
           
           return $linha[0];
       }  catch (Exception $ex){
           return 0;
       }
   }
   
    public function atuaizar ($cidade){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "UPDATE cidade SET 
                        cidade = '" . $cidade->getCidade() . "' ,
                        estado_codEstado = " . $cidade->getCodEstado() . " ,
                     WHERE codCidade = " . $cidade->getCodCidade() . ";";
          
           $resultado = mysql_query($query);
           ConexaoDB::desconectar($con);
           
           return $cidade->getCodCidade();
           
           }catch(Exception $ex){
               return 0;
           }
   }
   
   public function excluir($cidade){
       try{
           $con = ConexaoDB::conectar();
           $query = "DELETE FROM cidade 
                     WHERE codCidade = ". $cidade->getCodCidade() .";";
           
           $resultado = mysql_query($query);
           ConexaoDB::desconectar($con);
           return $cidade->getCodCidade();
                      
       }  catch (Exception $ex ){
           return 0;
       }
   }
   
   public function listar(){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "SELECT * FROM cidade";
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
            
            $query = "SELECT * FROM cidade 
                      WHERE codCidade = " . $codigo . ";"; 
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
