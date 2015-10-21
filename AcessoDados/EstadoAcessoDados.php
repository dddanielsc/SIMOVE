<?php

require_once ("../Entidade/Estado.php");
require_once ("../Configuracao/ConexaoDB.php");

/**
 * Description of EstadoAcessoDados
 *
 * @author Daniel Santos
 */
class EstadoAcessoDados {
    
    public function inserir ($estado){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "INSERT INTO estado (estado)
               VALUES ('" . $estado->getEstado() ."');";
           
           
           $resultado = mysql_query($query);
           $resultado = mysql_query("SELECT LAST_INSERT_ID AS codEstado;");
           $linha = mysql_fetch_row($resultado);
           ConexaoDB::desconectar($con);
           
           return $linha[0];
       }  catch (Exception $ex){
           return 0;
       }
   }
   
   public function atuaizar ($estado){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "UPDATE estado SET 
                        estado = '" . $estado->getEstado() . "' ,
                     WHERE codEstado = " . $estado->getCodEstado() . ";";
          
           $resultado = mysql_query($query);
           ConexaoDB::desconectar($con);
           
           return $usuario->getCodPessoa();
           
           }catch(Exception $ex){
               return 0;
           }
   }
    
   public function excluir($estado){
       try{
           $con = ConexaoDB::conectar();
           $query = "DELETE FROM estado 
                     WHERE codEstado = ". $estado->getCodEstado() .";";
           
           $resultado = mysql_query($query);
           ConexaoDB::desconectar($con);
           return $estado->getCodEstado();
                      
       }  catch (Exception $ex ){
           return 0;
       }
   }
   
   public function listar(){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "SELECT * FROM estado";
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
            
            $query = "SELECT * FROM estado 
                        WHERE codEstado = ". $codigo .";";
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
