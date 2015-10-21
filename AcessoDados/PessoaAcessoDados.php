<?php

require_once ("../Entidade/Pessoa.php");
require_once ("../Configuracao/ConexaoDB.php");

/**
 * Description of PessoaAcessoDados
 *
 * @author Daniel Santos
 */
class PessoaAcessoDados {
   public function inserir ($pessoa){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "INSERT INTO pessoa (nome, email, tel, 
                                         endereco, cidade_codCidade)
               VALUES ('". $pessoa->getNome() ."',
                       '". $pessoa->getEmail() ."', 
                       '". $pessoa->getTel() ."',
                       '". $pessoa->getEndereco() ."', 
                        ". $pessoa->getCodCidade() .");";
           
           
           $resultado = mysql_query($query);
           $resultado = mysql_query("SELECT * FROM pessoa WHERE codPessoa = LAST_INSERT_ID();");
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
   
   public function atuaizar ($pessoa){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "UPDATE pessoa SET 
                        nome = '" . $pessoa->getNome() . "' ,
                        email = '" . $pessoa->getEmail() . "' ,
                        tel = '" . $pessoa->getTel() . "' , 
                        endereco = '" . $pessoa->getEndereco() . "'
                        cidade_codCidade = " . $pessoa->getCodCidade() . ",
                     WHERE pessoa_codPessoa = " . $pessoa->getCodPessoa() . ";";
          
           $resultado = mysql_query($query);
           
           $jTableResult = array();
           $jTableResult['Result'] = "OK";
           print json_encode($jTableResult);
           
           ConexaoDB::desconectar($con);
           
           //return $pessoa->getCodPessoa();
           
           }catch(Exception $ex){
               return 0;
           }
   }
   
   public function excluir($pessoa){
       try{
           $con = ConexaoDB::conectar();
           $query = "DELETE FROM pessoa 
                     WHERE codPessoa = ". $pessoa->getCodPessoa() .";";
           
           $resultado = mysql_query($query);
           
           $jTableResult = array();
           $jTableResult['Result'] = "OK";
           print json_encode($jTableResult);
           
           ConexaoDB::desconectar($con);
           

            //return $pessoa->getCodPessoa();
                      
       }  catch (Exception $ex ){
           return 0;
       }
   }
   
   public function listar(){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "SELECT * FROM pessoa";
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
            
            $query = "SELECT * FROM pessoa 
                      WHERE codPessoa = " . $codigo . ";"; 
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
