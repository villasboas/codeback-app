<?php

    // url atual do site
    define( 'URL', 'http://localhost/codeback/codeback-app/' );

    // pega a pagina que deve ser carregada
    function carregarPagina( $onlyname = false ) {

        // todas as paginas do sistema
        $paginas = array( 'home', 'projetos', 'times', 'jobs' );
        
        // pagina padrao
        $paginaPadrao = 'home';

        // pagina que sera carregada
        $paginaAtual = ( isset( $_GET['pagina'] ) ) ? $_GET['pagina'] : $paginaPadrao;

        // verifica se a pagina que sera carregada eh uma pagina do sistema
        // se nao for, carrega a pagina padrao
        $paginaAtual = in_array( $paginaAtual, $paginas ) ? $paginaAtual : $paginaPadrao;

        return !$onlyname ? 'pages/'.$paginaAtual.'.php' : $paginaAtual;
    }

    // pega a url de navegacao formatada
    function url( $pagina, $options = false ) {

        // verifica se existem opcoes
        // se existir, transforma em formato url
        $options = $options ?  '&'.http_build_query( $options ) : '';
        
        // retorna a url formatada
        return URL.'index.php?pagina='.$pagina.$options;
    }

    // volta qual tab atual
    function active( $tab ) {
        return carregarPagina( true ) === $tab ? 'active' : '';
    }