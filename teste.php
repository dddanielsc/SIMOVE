<?php

require_once ("../Simove/Controle/CidadeControle.php");
require_once ("../Simove/Configuracao/ConexaoDB.php");

$entityControl = new CidadeControle();


$tuplas = array();
$tuplas = $entityControl->listar();


echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<div align="center">
  <select name="tabela" id="tabela" style="width: 400;">
	<?php
include("Conexao.php");
//Criamos o comando que efetua a busca do banco
		
//Fazendo o looping para exibição de todos registros que contiverem em nome da tabela
while ($oRow = mssql_fetch_array($tuplas)) {
    
echo("<option value='".$tuplas[$i]."'>".$tuplas[$i]."</option>");
    $i++;
}

?>
  </select>
</div>
</body>
</html>