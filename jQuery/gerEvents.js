$(document).ready(function(){
    
    //Chama a tabela pessoaCidadeTabela
    $('#gerPessoas').click(function(){
        $("#conteudoTable").hide();
        $('#conteudoTable').empty();
        
        $.ajax({
        url: './Visao/Tabelas/PessoaCidadeTabela.php',
        success: function(data){
          $("#conteudoTable").html(data);
          $("#conteudoTable").fadeIn(1000);
        }
      });
    });
    
    //Chama a tabela usuarioTabela
     $('#gerUsuarios').click(function(){
        $("#conteudoTable").hide();
        $('#conteudoTable').empty();
        
        $.ajax({
        url: './Visao/Tabelas/UsuarioTabela.php',
        success: function(data){
          $("#conteudoTable").html(data);
          $("#conteudoTable").fadeIn(1000);
        }
      });
    });
     $('#gerVeiculos').click(function(){
        $("#conteudoTable").hide();
        $('#conteudoTable').empty();
        
        $.ajax({
        url: './Visao/Tabelas/VeiculoTabela.php',
        success: function(data){
          $("#conteudoTable").html(data);
          $("#conteudoTable").fadeIn(1000);
        }
      });
    });
     $('#gerTags').click(function(){
        $("#conteudoTable").hide();
        $('#conteudoTable').empty();
        
        $.ajax({
        url: './Visao/Tabelas/CartaoNomePessoaTable.php',
        success: function(data){
          $("#conteudoTable").html(data);
          $("#conteudoTable").fadeIn(1000);
        }
      });
    });
     $('#gerMovimentacoes').click(function(){
        $("#conteudoTable").hide();
        $('#conteudoTable').empty();
        
        $.ajax({
        url: './Visao/Tabelas/VisaoMovimentacaoTabela.php',
        success: function(data){
          $("#conteudoTable").html(data);
          $("#conteudoTable").fadeIn(1000);
        }
      });
    });
    $('#operMovimentacoes').click(function(){
        $("#conteudoTable").hide();
        $('#conteudoTable').empty();
        
        $.ajax({
        url: './Visao/Tabelas/MovimentacaoTabela.php',
        success: function(data){
          $("#conteudoTable").html(data);
          $("#conteudoTable").fadeIn(1000);
        }
      });
    });
    
   
    
    
    
});