<?php


?>
<html>
    <head>
        <meta charset="UTF-8">
        

    </head>
    <body>
        <div id="TabelaGerMovimentacao" style=""></div>
        <script type="text/javascript">

            $(document).ready(function() {

                //Prepare jTable
                $('#TabelaGerMovimentacao').jtable({
                    title: 'Gerenciamento de Movimentação',
                    actions: {
                        listAction: './HMVC/MovimentacaoHelp.php?acao=listar',
                        createAction: './HMVC/MovimentacaoHelp.php?acao=criar',
                        updateAction: './HMVC/MovimentacaoHelp.php?acao=editar',
                        deleteAction: './HMVC/MovimentacaoHelp.php?acao=deletar'
                    },
                    fields: {
                        codMovimentacao: {
                            title: 'Id Movimentacao',
                            key: true,
                            create: false,
                            edit: false,
                            list: true
                        },
                        regMovimentacao: {
                            title: 'Registro',
                            width: '40%',
                            edit: false,
                            create: false
                        },
                        entradaSaida: {
                            title: 'Movimentacao',
                            width: '40%',
                            type: 'Situação',
                            options: {'0' : 'Saida', '1': 'Entrada'}
                        },
                        veiculo_codVeiculo: {
                            title: 'IdVeiculo',
                            width: '20%',
                            
                        }
                    }
                });

                //Load person list from server
                $('#TabelaGerMovimentacao').jtable('load');

            });

        </script>
    </body>
</html>

