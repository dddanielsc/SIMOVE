<?php

require_once ("../Entidade/Veiculo.php");
require_once ("../Configuracao/ConexaoDB.php");

/**
 * Description of VeiculoAcessoDados
 *
 * @author Daniel Santos
 */
class VeiculoAcessoDados {
    
     public function inserir ($veiculo){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "INSERT INTO veiculo (modelo, placa, marca)
               VALUES ('" . $veiculo->getModelo() . "' ,
                       '" . $veiculo->getPlaca() . "', 
                       '" . $veiculo->getMarca() ."' );";
           
           
           $resultado = mysql_query($query);
           $resultado = mysql_query("SELECT * FROM veiculo WHERE codVeiculo = LAST_INSERT_ID();");
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
   
   public function atuaizar ($veiculo){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "UPDATE veiculo SET 
                        modelo = '" . $veiculo->getModelo() . "' ,
                        placa = '" . $veiculo->getPlaca() . "' ,
                        marca = '" . $veiculo->getMarca() . "',
                     WHERE codVeiculo = " . $veiculo->getCodVeiculo() . ";";
          
           
           $resultado = mysql_query($query);
           $resultado = mysql_query("SELECT * FROM veiculo WHERE codVeiculo = LAST_INSERT_ID();");
           $linha = mysql_fetch_array($resultado);
           
           
           $jTableResult = array();
           $jTableResult['Result'] = "OK";
           print json_encode($jTableResult);
           
           
           ConexaoDB::desconectar($con);
           
           
           
           //return $veiculo->getCodVeiculo();
           
           }catch(Exception $ex){
               return 0;
           }
   }
   
   public function excluir($veiculo){
       try{
           $con = ConexaoDB::conectar();
           $query = "DELETE FROM veiculo 
                     WHERE codVeiculo = " . $veiculo->getCodVeiculo() .";";
           
           $resultado = mysql_query($query);
           
           $jTableResult = array();
           $jTableResult['Result'] = "OK";
           print json_encode($jTableResult);
           
           ConexaoDB::desconectar($con);
           //return $veiculo->getCodVeiculo();
                      
       }  catch (Exception $ex ){
           return 0;
       }
   }
   
   public function listar(){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "SELECT * FROM veiculo";
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
            
            $query = "SELECT * FROM veiculo 
                      WHERE codVeiculo = " . $codigo . ";"; 
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
