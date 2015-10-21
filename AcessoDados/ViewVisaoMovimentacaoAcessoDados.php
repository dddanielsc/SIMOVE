<?php

require_once '../Configuracao/ConexaoDB.php';
require_once '../Entidade/ViewVisaoMovimentacao.php';

/**
 * Description of ViewVisaoMovimentacaoAcessoDados
 *
 * @author Daniel Santos
 */
class ViewVisaoMovimentacaoAcessoDados {
    
     public function listar(){
       try{
           $con = ConexaoDB::conectar();
           
           $query = "select * from visaoMovimentacao;";
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
}

?>
