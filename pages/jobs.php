<?PHP include( 'partials/header.php' ); ?>

<div id="wrapper" class="container">
    
    <div id="jobs" class="col-md-7">
        
        <?PHP for( $i = 0; $i < 10; $i++ ) : ?>
        <div class="job-item panel panel-default">
            
            <div class="panel-heading">
                <h3 class="panel-title pull-left">Texto de Conteúdo para Blog</h3>
                <div class="pull-right">
                    Publicado à <b>3 meses</b>
                </div>
                <div class="clearfix"></div>
            </div><!-- cabecalho do feed -->
            
            <div class="panel-body">
                <div class="header">
                    <div class="avatar pull-left">
                        <img src="img/avatar.jpg">
                    </div>
                    <div class="info pull-left">
                        <div class="line">
                            <small class="text-muted">publicado por</small> <b>Gustavo Vilas Bôas</b>
                        </div>
                        <div class="line">
                            <a href="#">
                                <small>ver reputação</small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <p>Preciso de alguém para ser o criador de conteúdos do nosso Blog, 
                na maioria das vezes a fonte de informação para esse conteúdos são 
                vídeos nossos onde você vai poder assistir assimilar 
                e criar uma matéria para o Blog.</p>
            </div><!-- corpo da postagem -->

            <ul class="list-group">
                <li class="list-group-item">
                    <span class="label label-primary">PHP</span>
                    <span class="label label-primary">Javascript</span>
                    <span class="label label-primary">Adobe Photoshop</span>
                    <span class="label label-primary">Visual Code</span>
                </li>
                <li class="list-group-item">
                    <b>Orçamento </b> R$ 150,00 - 5.000,00
                </li>
                <li class="list-group-item">
                    <b>Procurando por </b> Integrante para equipe
                </li>
                <li class="list-group-item">
                    <span class="label label-warning">Design & Multimedia</span>
                    <span class="label label-warning">Ilustrações</span>
                </li>
            </ul><!-- detalhes do job -->

            <div class="panel-footer">
                <button class="btn btn-success">
                    <b><i class="fa fa-check"></i> Enviar proposta</b>
                </button>
                <button class="btn btn-danger pull-right">
                    <b><i class="fa fa-ban"></i> Denunciar</b>
                </button>
                <div class="clearfix"></div>
            </div><!-- rodape -->

        </div><!-- feed-item -->
        <?PHP endfor; ?>
    </div>

    <div class="col-md-offset-2 col-md-3">
        <h2>sidebar</h2>
    </div>

</div>