<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>@yield("titulo") - Não Quero Opinar</title>

        {{HTML::style("libraries/bootstrap/css/bootstrap.css")}}
        {{HTML::style("css/main.css")}}
        @yield("css")
    </head>

    <body>
        <header>
            <!-- navbar -->
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- logo -->
                        <a class="navbar-brand" href="{{URL::action("HomeController@getHome")}}">
                            <img src="{{asset('img/logo.png')}}" alt="Não Quero Opinar Logo"/>
                        </a>
                    </div> <!-- /navbar-header -->

                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="{{URL::action("NoticiaController@getListarGenero", array("genero" => "mundo"))}}">Mundo</a></li>
                            <li><a href="{{URL::action("NoticiaController@getListarGenero", array("genero" => "esportes"))}}">Esportes</a></li>
                            <li><a href="{{URL::action("NoticiaController@getListarGenero", array("genero" => "tecnologia"))}}">Tecnologia</a></li>
                            <li><a href="{{URL::action("NoticiaController@getListarGenero", array("genero" => "entretenimento"))}}">Entretenimento</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @if(is_null(Auth::user()))
                                <li><a href="{{URL::action("UsuarioController@getLogin")}}">Login</a></li>
                                <li><a href="{{URL::action("UsuarioController@getCadastrar")}}">Cadastrar</a></li>
                            @else
                                @if(Auth::user()->privilegios == 1)
                                    <li><a href="{{URL::action("UsuarioController@getAdminPanel")}}">Painel Admin</a></li>
                                @endif
                                <li><a href="{{URL::action("UsuarioController@getAlterar")}}">Perfil</a></li>
                                <li><a href="{{URL::action("UsuarioController@getLogout")}}">Logout</a></li>
                            @endif
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </header>

        <!-- alerts de sucessos e erros -->
        <div class="container">
            @if(Session::has('login_success'))
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Login efetuado com sucesso.
                    </div>
            @elseif(Session::has('logout_success'))
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Logout efetuado com sucesso.
                    </div>
            @elseif(Session::has('cadastro_success'))
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Cadastro efetuado com sucesso.
                    </div>
            @elseif(Session::has('alterar_success'))
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Alterações efetuadas com sucesso.
                    </div>
            @elseif(Session::has('delete_usuario_success'))
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Usuário deletado com sucesso.
                    </div>
            @elseif(Session::has('create_news_success'))
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Notícia criada com sucesso.
                </div>
            @elseif(Session::has('update_news_success'))
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Notícia alterada com sucesso.
                </div>
            @elseif(Session::has('delete_news_success'))
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Notícia deletada com sucesso.
                </div>
            @elseif(Session::has('permission_error'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Sem permissão para realizar esta ação.
                </div>
            @elseif(Session::has('create_comentario_success'))
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Comentário criado com sucesso.
                </div>
            @elseif(Session::has('update_comentario_success'))
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Comentário alterado com sucesso.
                </div>
            @elseif(Session::has('delete_comentario_success'))
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Comentário deletado com sucesso.
                </div>
            @endif

            @yield("conteudo")
        </div><!-- container -->

        <footer>
            <div class="container">
                <!-- rodape content -->
                <div class="row">
                    <!-- reporteres -->
                    <div class="col-sm-4 reporteres">
                        <h6>Nossos repórteres</h6>
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#">Joaquim Ferreira</a></li>
                            <li><a href="#">Gabriel Ripper</a></li>
                            <li><a href="#">Elmo Sanches</a></li>
                        </ul>
                    </div><!-- /.reporteres -->

                    <!-- noticias -->
                    <div class="col-sm-7 col-sm-offset-1 noticias">
                        <h6>Notícias</h6>
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{URL::action("NoticiaController@getListarGenero", array("genero" => "mundo"))}}">Mundo</a></li>
                            <li><a href="{{URL::action("NoticiaController@getListarGenero", array("genero" => "esportes"))}}">Esportes</a></li>
                            <li><a href="{{URL::action("NoticiaController@getListarGenero", array("genero" => "tecnologia"))}}">Tecnologia</a></li>
                            <li><a href="{{URL::action("NoticiaController@getListarGenero", array("genero" => "entretenimento"))}}">Entretenimento</a></li>
                        </ul>
                    </div><!-- /.noticias -->
                </div><!-- /.row -->

                <!-- direitos -->
                <div class="row">
                    <div class="direitos">
                        <p>© Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>

        {{HTML::script("libraries/jquery.min.js")}}
        {{HTML::script("libraries/bootstrap/js/bootstrap.min.js")}}
        @yield("js")
    </body>
</html>