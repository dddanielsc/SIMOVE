<?php


?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="TabelVeiculo" style=""></div>
        <script type="text/javascript">

            $(document).ready(function() {

                //Prepare jTable
                $('#TabelVeiculo').jtable({
                    title: 'Tabela de Veículos',
                    actions: {
                        listAction: './HMVC/Veiculohelp.php?acao=listar',
                        createAction: './HMVC/Veiculohelp.php?acao=criar',
                        updateAction: './HMVC/Veiculohelp.php?acao=editar',
                        deleteAction: './HMVC/Veiculohelp.php?acao=deletar'
                    },
                    fields: {
                        codVeiculo: {
                            title: 'Id Veículo',
                            key: true,
                            create: true,
                            edit: false,
                            list: true
                        },
                        modelo: {
                            title: 'Modelo',
                            width: '40%'
                        },
                        placa: {
                            title: 'Placa',
                            width: '40%'
                        },
                        marca: {
                            title: 'Marca',
                            width: '20%',
                            
                        }
                    }
                });

                //Load person list from server
                $('#TabelVeiculo').jtable('load');

            });

        </script>
    </body>
</html>
