<?PHP include( 'partials/header.php' ); ?>

<div class="container">
    <div id="projetos" class="col-md-8">

        <div class="actions col-md-12">
            <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small class="text-muted">Tipo:</small> <b>Todos</b> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Todos</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Meus projetos</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Projetos do meu time</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Projeto de clientes</a></li>
            </ul>
            </div>
            
        </div>

        <?PHP for( $i = 0; $i < 10; $i++ ) : ?>
        <div class="projeto col-md-6">
            <div class="projeto-item panel panel-default">
            
                <div class="panel-heading">
                    <h3 class="panel-title pull-left">
                        <a href="#">Find2work <span class="badge">42</span></a>
                    </h3>
                    <button class="btn btn-xs btn-danger pull-right">
                        <b><i class="fa fa-eye"></i> Ver projeto</b>
                    </button>
                    <div class="clearfix"></div>
                </div><!-- cabecalho do feed -->
                
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div><!-- corpo da projeto -->

                <div class="panel-footer">
                    <div class="pull-left">
                        <span class="label label-primary">PHP</span>
                        <span class="label label-warning">Javascript</span>
                    </div>
                    <div class="pull-right">
                        <small class="text-muted">17/11/1996 às 14:50</small>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- rodape do projeto -->
            </div><!-- feed-item -->
        </div>
        <?PHP endfor; ?>
    </div>
    <div class="col-md-4">
        <h3>sidebar</h3>
    </div>
</div>