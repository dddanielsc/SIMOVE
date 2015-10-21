<!DOCTYPE html>
<html lang="pt-br">
  <head>
      
    <meta charset="utf-8">
    <title>SIMOVE | Sistema de Movimentação Veícular</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/extra.css" rel="stylesheet" media="screen">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
  </head>
  
  <body id="bgGradienteCinza">
      
      <!-- INÍCIO Menu -->
      <div class="navbar ">
        <div class="navbar-inner">
          <a class="brand" href="#">SIMOVE</a>
          <ul class="nav">
            <li class="active"><a href="#">Login</a></li>
            <li><a href="#">O que é ?</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </div>
      </div>
      <!-- FIM Menu -->
      
      <!-- INÍCIO FORMULÁRIO LOGIN -->
      <a name="login"></a>
    <div  >
    <div class="row">
        <div id="alinhamenCentro">
        <div class="span10">
        <form class="form-group" action="verifica-login.php"  method="post"> 
            <div class="control-group">
              <legend>Sistema de Movimentação Veícular </legend>
              <label>Faça Login</label>
              <label class="control-label" for="inputEmail">Usuário</label>
              <div class="controls">
                  <input type="text" id="inputEmail" placeholder="usuário" name="inputUsuario"> <i class="icon-user"></i>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Senha</label>
              <div class="controls">
                <input type="password" id="inputPassword" placeholder="Senha" name="inputSenha"> <i class="icon-lock"></i>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
               
                <button type="submit" class="btn btn-success">Entrar</button>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Cadastre-se</a>

                  <!-- Modal -->
                  <div id="myModal" class="modal hide fade">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h3>Pré-Cadastro</h3> Seus dados estarão pré-cadastrados no SIMOVE.
                    </div>
                    <div class="modal-body">
                        <form>
                          <fieldset>
                            <legend>Nome</legend>
                            <label>Nome do título</label>
                            <input type="text" placeholder="Digite seu Nome...">
                        
                            <select>
                            <option>Professor</option>
                            <option>Aluno</option>
                            <option>Fornecedor</option>
                            <option>Visitante</option>
                            <option>Outros</option>
                          </select>
                            <button type="submit" class="btn">Enviar</button>
                          </fieldset>
                        </form>
                      
                    </div>
                    <div class="modal-footer">
                      <a href="#" class="btn" >Fechar</a>
                      <a href="#" class="btn btn-primary">Salvar mudanças</a>
                    </div>
                  </div>
               
                


              </div>
            </div>
        </form>
          <div >  

          </div>
        </div>
        </div>      
    </div>
    </div>
  </body>
</html>