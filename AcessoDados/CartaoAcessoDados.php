<?php

require_once ("../Entidade/Cartao.php");
require_once ("../Configuracao/ConexaoDB.php");


/**
 * Description of CartaoAcessoDados
 *  
 * @author Daniel Santos
 */
class CartaoAcessoDados {
    
    public function inserir ($cartao){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "INSERT INTO cartaoentrada (veiculo_codVeiculo, usuario_pessoa_codPessoa)
               VALUES ('". $cartao->getCodVeiculo() ." ,
                        ". $cartao->getCodPessoa() ."');";
           
           
           $resultado = mysql_query($query);
           $resultado = mysql_query("SELECT LAST_INSERT_ID AS pessoa_codPessoa;");
           $linha = mysql_fetch_row($resultado);
           ConexaoDB::desconectar($con);
           
           return $linha[0];
       }  catch (Exception $ex){
           return 0;
       }
   }
   
   public function atuaizar ($cartao){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "UPDATE cartaoentrada SET 
                        veiculo_codVeiculo = " . $cartao->getCodVeiculo() . " ,
                        usuario_pessoa_codPessoa = " . $cartao->getStatus() . ",
                     WHERE codCartao = " . $cartao->getCodCartao() . ";";
          
           $resultado = mysql_query($query);
           ConexaoDB::desconectar($con);
           
           return $usuario->getCodPessoa();
           
           }catch(Exception $ex){
               return 0;
           }
   }
   public function excluir($cartao){
       try{
           $con = ConexaoDB::conectar();
           $query = "DELETE FROM cartaoentrada 
                     WHERE codCartao = ". $cartao->getCodCartao() .";";
           
           $resultado = mysql_query($query);
           ConexaoDB::desconectar($con);
           return $cartao->getCodCartao();
                      
       }  catch (Exception $ex ){
           return 0;
       }
   }
    public function listar(){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "SELECT * FROM cartaoentrada";
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
            
            $query = "SELECT * FROM cartaoentrada 
                      WHERE codCartao = " . $codigo . ";"; 
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
