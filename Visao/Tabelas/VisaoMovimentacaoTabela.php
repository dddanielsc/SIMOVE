<?php


?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="TabelaVisaoMovimentacao" style=""></div>
        <script type="text/javascript">

            $(document).ready(function() {

                //Prepare jTable
                $('#TabelaVisaoMovimentacao').jtable({
                    title: 'Historico de Movimentacao',
                    actions: {
                        listAction: './HMVC/ViewVisaoMovimentacaoHelp.php?acao=listar'
                    },
                    fields: {
                        regMovimentacao: {
                            title: 'Data',
                            key: true,
                            create: true,
                            edit: true
                            
                        },
                        entradaSaida: {
                            title: 'Entrada/Saída',
                            width: '40%',
                            type: 'Movimentacao',
                            options: {'0' : 'Saida', '1': 'Entrada'}
                        },
                        placa: {
                            title: 'Placa',
                            width: '40%'
                        },
                        usuario: {
                            title: 'Usuarios',
                            width: '20%'
                            
                        }
                    }
                });

                //Load person list from server
                $('#TabelaVisaoMovimentacao').jtable('load');

            });

        </script>
    </body>
</html>
