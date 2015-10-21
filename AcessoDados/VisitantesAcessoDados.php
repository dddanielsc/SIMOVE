<?php

require_once ("../Entidade/Visitante.php");
require_once ("../Configuracao/ConexaoDB.php");

/**
 * Description of VisitantesAcessoDados
 *
 * @author Daniel Santos
 */
class VisitantesAcessoDados {
    
    public function inserir ($visitante){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "INSERT INTO visitante (nome, cnh, cpf, motivo, movimentacao_codMovimentacao)
               VALUES ('" . $visitante->getNome() . "' ,
                       '" . $visitante->getCnh() . "', 
                       '" . $visitante->getCpf() ."' ,
                       '" . $visitante->getFinalidade() ."'
                        " . $visitante->getCodMovimentação() .");";
           
           
           $resultado = mysql_query($query);
           $resultado = mysql_query("SELECT LAST_INSERT_ID AS codVisitante;");
           $linha = mysql_fetch_row($resultado);
           ConexaoDB::desconectar($con);
           
           return $linha[0];
       }  catch (Exception $ex){
           return 0;
       }
   }
   
    public function atuaizar ($visitante){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "UPDATE visitante SET 
                        nome = '" . $visitante->getNome() . "' ,
                        cnh = '" . $visitante->getCnh() . "' ,
                        cpf = '" . $visitante->getCpf() . "' ,
                        motivo = '" . $visitante->getFinalidade() . "' ,
                        movimentacao_codMovimentacao= " . $visitante->getCodMovimentação() . " ,
                     WHERE codVisitante = " . $visitante->getCodVisitante() . ";";
          
           $resultado = mysql_query($query);
           ConexaoDB::desconectar($con);
           
           return $visitante->getCodVisitante();
           
           }catch(Exception $ex){
               return 0;
           }
   }
   
   public function excluir($visitante){
       try{
           $con = ConexaoDB::conectar();
           $query = "DELETE FROM visitante 
                     WHERE codVisitante = ". $visitante->getCodVisitante() .";";
           
           $resultado = mysql_query($query);
           ConexaoDB::desconectar($con);
           return $visitante->getCodVisitante();
                      
       }  catch (Exception $ex ){
           return 0;
       }
   }
   
    public function listar(){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "SELECT * FROM visitante";
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
            
            $query = "SELECT * FROM visitante 
                      WHERE codVisitante = " . $codigo . ";"; 
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
