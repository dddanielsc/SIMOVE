<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="PessoaCidade" style=""></div>
        <script type="text/javascript">

            $(document).ready(function() {

                //Prepare jTable
                $('#PessoaCidade').jtable({
                    title: 'Tabela de Pessoas',
                    actions: {
                        listAction: './HMVC/PessoaCidadeHelp.php?acao=listar'
                       
                    },
                    fields: {
                        codPessoa: {
                            title: 'IdPessoa',
                            key: true,
                            list: true,
                             width: '10%'
                        },
                        nome: {
                            title: 'Nome',
                            width: '30%'
                        },
                        email: {
                            title: 'Email',
                            width: '15%'
                        },
                        tel: {
                            title: 'Telefone',
                            width: '10%'
                        },
                        endereco: {
                            title: 'Endereco',
                            width: '25%'
                        }, 
                        cidade: {
                            title: 'Cidade',
                            width: '10%'
                        }
                    }
                });

                //Load person list from server
                $('#PessoaCidade').jtable('load');

            });

        </script>
    </body>
</html>

