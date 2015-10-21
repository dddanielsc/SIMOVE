<?php
// LOCAL DO PHP
$hotname = 'localhost';

//NOME DO USUÁRIO PARA O BANCO
$username = 'root';

//SENHA DO BANCO
$senhaBD = '';

//BANCO DE DADOS DESEJADO
$banco = 'phplogin';

$db = mysql_connect($hotname, $username,$senhaBD);

mysql_select_db($banco, $db)or die ("Não Conseguiu selecionar ... morreu");

?>
