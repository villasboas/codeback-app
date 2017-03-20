<header id="header">
    <div class="container">
        
        <div class="search-line">
            
            <div class="searchbox col-sm-7 col-xs-9 z-depth-1">
                <input type="text" placeholder="Pesquisar no site">
                <button class="z-depth-1">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div><!-- input de pesquisa -->
            
            <div class="col-xs-3 col-sm-5 align-right">
                <div class="item avatar z-depth-1">
                    <img src="img/avatar.jpg" alt="">
                </div>
                <button class="btn btn-danger hidden-xs z-depth-1">
                    <i class="fa fa-plus"></i> <b>Novo projeto</b>
                </button>
                <button class="btn btn-danger hidden-xs z-depth-1">
                    <i class="fa fa-bell"></i>
                    <span class="badge">42</span>
                </button>
            </div><!-- links do lado direito -->

        </div><!-- linha de cima -->

        <div class="tabs-line">
            <a class="tab <?PHP echo active('home'); ?>" href="<?PHP echo url('home'); ?>">Feed</a>
            <a class="tab <?PHP echo active('jobs'); ?>" href="<?PHP echo url('jobs'); ?>">Jobs</a>
            <a class="tab <?PHP echo active('projetos'); ?>"  href="<?PHP echo url('projetos'); ?>">Projetos</a>
            <a class="tab <?PHP echo active('times'); ?>"  href="<?PHP echo url('times'); ?>">Times</a>
        </div><!-- barras de navegacao -->

    </div>
</header>