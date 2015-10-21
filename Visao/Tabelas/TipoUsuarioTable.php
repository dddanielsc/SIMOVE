<html>
    <head>
    </head>
    <body>
        <div id="TabelaTipoUsuario" style=""></div>
        <script type="text/javascript">

            $(document).ready(function() {

                //Prepare jTable
                $('#TabelaTipoUsuario').jtable({
                    title: 'Tabela Tipo de Usuário',
                    actions: {
                        listAction: './HMVC/TipoUsuarioHelp.php?acao=listar',
                        createAction: './HMVC/TipoUsuarioHelp.php?acao=criar',
                        updateAction: './HMVC/TipoUsuarioHelp.php?acao=editar',
                        deleteAction: './HMVC/TipoUsuarioHelp.php?acao=deletar'
                    },
                    fields: {
                        codTipoUsuario: {
                            key: true,
                            create: true,
                            edit: false,
                            list: false
                        },
                        tipo: {
                            title: 'Tipo',
                            width: '40%'
                        },
                        admin: {
                            title: 'Administrador',
                            width: '20%',
                            type: 'Admin',
                            options: {'3': 'Nao', '2': 'Sim'}
                        },
                        EspecTipo: {
                            title: 'Espeficacao do Tipo',
                            width: '30%'
                        }
                    }
                });

                //Load person list from server
                $('#TabelaTipoUsuario').jtable('load');

            });

        </script>
    </body>
</html>
