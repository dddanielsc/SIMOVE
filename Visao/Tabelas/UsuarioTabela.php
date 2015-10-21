<?php


?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="TabelaUsuario" style=""></div>
        <script type="text/javascript">

            $(document).ready(function() {

                //Prepare jTable
                $('#TabelaUsuario').jtable({
                    title: 'Tabela de Usuários',
                    actions: {
                        listAction: './HMVC/UsuarioHelp.php?acao=listar',
                        createAction: './HMVC/UsuarioHelp.php?acao=criar',
                        updateAction: './HMVC/UsuarioHelp.php?acao=editar'
                    },
                    fields: {
                        pessoa_codPessoa: {
                            title: 'Id Usuario',
                            key: true,
                            create: true,
                            edit: true
                            
                        },
                        usuario: {
                            title: 'Usuario',
                            width: '40%'
                        },
                        senha: {
                            list: false,
                            title: 'Senha',
                            type: 'password',
                            width: '40%'
                        },
                        ativo: {
                            title: 'Status',
                            width: '20%',
                            type: 'Situação',
                            options: {'0' : 'Desativado', '1': 'Ativado'}
                            
                        },
                         tipoUsuario_codTipoUsuario: {
                            title: 'TipoUsuario',
                            width: '20%',
                            
                        }
                    }
                });

                //Load person list from server
                $('#TabelaUsuario').jtable('load');

            });

        </script>
    </body>
</html>
