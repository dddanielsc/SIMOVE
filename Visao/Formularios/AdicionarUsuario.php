<?php

session_start();
include ('Conexao.php');


$Novologin = $_POST["Usuario"];
$Novasenha = $_POST["Senha"];


$query = "INSERT INTO usuarios (usuario,senha) VALUES ('$Novologin' , $Novasenha)";
mysql_query($query) or die ("Não foi possível inserir");

header ('location:CadastroUsuario.php ');

?>

