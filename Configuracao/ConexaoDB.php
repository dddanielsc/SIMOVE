<?php


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexaoDB
 *
 * @author Daniel Santos
 */
class ConexaoDB {
   
    public static $nomeBD = "simovedb";
    public static $usuario = "root";
    public static $senha = "";

    public static function conectar() {
        try {
            //Open database connection
            $con = mysql_connect("localhost", ConexaoDB::$usuario, ConexaoDB::$senha);
            
            //$con = mysql_connect("localhost", "daniel" , "root");
            mysql_select_db(ConexaoDB::$nomeBD, $con);
           
            return $con;
        }catch (Exception $ex) {
            echo "NÃ£o foi possivel conectar ao banco de dados";
        }
    }
    public static function desconectar($con) {
        try {
            //Close database connection
            mysql_close($con);
           
        }catch (Exception $ex) {
            echo "NÃ£o foi possivel conectar ao banco de dados";
        }
    }
}
?>
