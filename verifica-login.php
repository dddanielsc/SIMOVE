<?php
session_start();
require_once ("../Simove/Configuracao/ConexaoDB.php");
require_once ("../Simove/Entidade/Usuario.php");

$login = $_POST["inputUsuario"];
$senha = $_POST["inputSenha"];

$usuario = new Usuario();

$con = ConexaoDB::conectar();
$consulta = "SELECT pessoa_CodPessoa, usuario, senha, ativo, tipoUsuario_CodTipoUsuario
                FROM usuario 
                WHERE usuario='$login' AND senha='$senha'";

$resulta = mysql_query($consulta);


$USER = mysql_fetch_array($resulta);

$usuario->codPessoa =  $USER["pessoa_CodPessoa"];
$usuario->usuario = $USER["usuario"];
$usuario->senha = $USER["senha"];
$usuario->ativo = $USER["ativo"];
$usuario->codTipo = $USER["tipoUsuario_CodTipoUsuario"];

$numero_linhas = mysql_num_rows($resulta);
ConexaoDB::desconectar($con);


//echo $numero_linhas; 

if($numero_linhas==1){
    //Encontrou usuario
    $_SESSION["usuario"] = $usuario;
    
    if($_SESSION["usuario"]->getCodTipo() == 1){
        header('location:home.php'); 
    } else if($_SESSION["usuario"]->getCodTipo() == 2){
        header('location:gestor.php'); 
    }else if($_SESSION["usuario"]->getCodTipo() == 3){
        header('location:operador.php'); 
    }
    
    
    //var_dump($_SESSION["usuario"]);
    
   //if($_SESSION["usuario"]->getCodTipo() == 1){
   //   header('location:home.php');       
   //}
    
 
}else{
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header ('location:index.php');
}


?>
