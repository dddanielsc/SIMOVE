<?php
require_once '../Controle/UsuarioControle.php';
require_once '../Entidade/Usuario.php';


//Getting records (listAction)
if ($_GET["acao"] == "listar") {
    $usuarioControle = new UsuarioControle();
    print $usuarioControle->listar();
    
}
//Creating a new record (createAction)
else if ($_GET["acao"] == "criar") {
    $usuarioControle = new UsuarioControle();
    $entidade = new Usuario();
    
    //$entidade->setPessoa_codPessoa($_POST['pessoa_codPessoa']);
    $entidade->setUsuario($_POST['usuario']);
    $entidade->setSenha($_POST['senha']);
    $entidade->setStatus($_POST['ativo']);
    $entidade->setCodTipo($_POST['tipoUsuario_codTipoUsuario']);
    
    
    print $usuarioControle->inserir($entidade);
}
//Updating a record (updateAction)
else if ($_GET["acao"] == "editar") {
    $usuarioControle = new UsuarioControle();
    $entidade = new Usuario();
    
    
    //$entidade->setCodPessoa($_POST['pessoa_codPessoa']);
    $entidade->setUsuario($_POST['usuario']);
    $entidade->setSenha($_POST['senha']);
    $entidade->setStatus($_POST['ativo']);
    $entidade->setCodTipo($_POST['tipoUsuario_codTipoUsuario']);
    
    print $usuarioControle->atualizar($entidade);
}
//Deleting a record (deleteAction)
else if ($_GET["acao"] == "deletar") {
   
  /* 
   * O CERTO É DELETAR PORÉM TEM QUE DESATIVAR, POIS O RELACIONAMENTO NO BANCO 
   * É DE DEPNDÊNCIA;
    $entidade = new Usuario();
    
    $entidade->setCodPessoa($_POST['pessoa_codPessoa']);
    
    print $usuarioControle->excluir($entidade);
    $usuarioControle = new UsuarioControle();
   */
  
}

?>
