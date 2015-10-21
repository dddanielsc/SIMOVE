<?php

require_once ("../Entidade/ViewPessoaCidade.php");
require_once ("../Configuracao/ConexaoDB.php");

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ViewPessoaCidadeAcessoDados
 *
 * @author Daniel Santos
 */
class ViewPessoaCidadeAcessoDados {
    
    public function listar (){
        try{
           $con = ConexaoDB::conectar();
           
           $query = "SELECT * FROM pessoaNomeCidade";
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
