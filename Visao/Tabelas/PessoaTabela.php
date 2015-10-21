<?php


?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="TabelaPessoa" style=""></div>
        <script type="text/javascript">

            $(document).ready(function() {

                //Prepare jTable
                $('#TabelaPessoa').jtable({
                    title: 'Tabela de Pessoas',
                    actions: {
                        listAction: './HMVC/PessoaHelp.php?acao=listar',
                        createAction: './HMVC/PessoaHelp.php?acao=criar',
                        updateAction: './HMVC/PessoaHelp.php?acao=editar',
                        deleteAction: './HMVC/PessoaHelp.php?acao=deletar'
                    },
                    fields: {
                        codPessoa: {
                            title: 'Id Pessoa',
                            key: true,
                            create: false,
                            edit: false,
                            list: true,
                            width: '5%'
                        },
                        nome: {
                            title: 'Nome',
                            width: '20%'
                        },
                        email: {
                            title: 'E-mail',
                            width: '20%',
                           
                        },
                        tel: {
                            title: 'Telefone',
                            width: '10%'
                        },
                        endereco: {
                            title: 'Endereço',
                            width: '40%'
                        },
                        cidade_codCidade: {
                            title: 'Código da Cidade',
                            width: '5%'
                        }
                    }
                });

                //Load person list from server
                $('#TabelaPessoa').jtable('load');

            });

        </script>
    </body>
</html>
