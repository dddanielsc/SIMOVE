<?php


?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="CartaoNomePessoa" style=""></div>
        <script type="text/javascript">

            $(document).ready(function() {

                //Prepare jTable
                $('#CartaoNomePessoa').jtable({
                    title: 'Tabela de Cartões',
                    actions: {
                        listAction: './HMVC/ViewCartaoNomePessoaHelp.php?acao=listar'
                       
                    },
                    fields: {
                        codCartao: {
                            title: 'Cartao',
                            key: true,
                            list: true
                        },
                        nome: {
                            title: 'Nome do Usuario',
                            width: '60%',
                        }
                    }
                });

                //Load person list from server
                $('#CartaoNomePessoa').jtable('load');

            });

        </script>
    </body>
</html>
