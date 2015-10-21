<?php

require_once ("../Entidade/ViewCartaoNomePessoa.php");
require_once ("../Configuracao/ConexaoDB.php");


class ViewCartaoNomePessoaAcessoDados {
    
    public function listar (){
        try{
           $con = ConexaoDB::conectar();
           
           $query = "SELECT * FROM cartaonomepessoa";
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
           
           
       }  catch (Exception $exc){
           return $exc;
       }
    }
}

?>
