<?php

require_once ("../Entidade/Movimentacao.php");
require_once ("../Configuracao/ConexaoDB.php");

/**
 * Description of MovimentacaoAcessoDados
 *
 * @author Daniel Santos
 */
class MovimentacaoAcessoDados {
    
    public function inserir ($movimentacao){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "INSERT INTO movimentacao (regMovimentacao, entradaSaida, veiculo_codVeiculo)
                     VALUES ('" . $movimentacao->getRegMovimentacao() . "' ,
                              " . $movimentacao->getEntradaSaida() . ", 
                              " . $movimentacao->getCodVeiculo() ." );";
           
           
           $resultado = mysql_query($query);
           $resultado = mysql_query("SELECT * FROM movimentacao WHERE codMovimentacao = LAST_INSERT_ID();");
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
    
     public function atuaizar ($movimentacao){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "UPDATE movimentacao SET 
                        regMovimentacao = '" . $movimentacao->getRegMovimentacao() . "' ,
                        entradaSaida = " . $movimentacao->getEntradaSaida() . " ,
                        veiculo_codVeiculo = " . $movimentacao->getCodVeiculo() . " ,
                     WHERE codMovimentacao = " . $movimentacao->getCodMovimentacao() . ";";
          
           $resultado = mysql_query($query);
           $resultado = mysql_fetch_array("SELECT * FROM movimentacao WHERE codMovimentacao = LAST_INSERT_ID();");
           $linha = mysql_fetch_array($resultado);
           
           $jTableResult = array();
           $jTableResult['Result'] = "OK";
           print json_encode($jTableResult);
           
           ConexaoDB::desconectar($con);
           
           //return  $movimentacao->getCodMovimentacao();
           
           }catch(Exception $ex){
               return 0;
           }
   }
   
    public function excluir($movimentacao){
       try{
           $con = ConexaoDB::conectar();
           $query = "DELETE FROM movimentacao 
                     WHERE codMovimentacao = " . $movimentacao->getCodMovimentacao() . ";";
           
           $resultado = mysql_query($query);
           
           $jTableResult = array();
           $jTableResult['Result'] = "OK";
           print json_encode($jTableResult);
           
           ConexaoDB::desconectar($con);
           //return $movimentacao->getCodMovimentacao();
                      
       }  catch (Exception $ex ){
           return 0;
       }
   }
   
   public function listar(){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "SELECT * FROM movimentacao";
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
            
            $query = "SELECT * FROM movimentacao 
                      WHERE codMovimentacao = " . $codigo . ";"; 
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
