<?PHP include( 'partials/header.php' ); ?>

<div class="container">
    <div id="projetos" class="col-md-8">

        <?PHP for( $i = 0; $i < 10; $i++ ) : ?>
        <div class="projeto col-md-6">
            <div class="projeto-item panel panel-default">
            
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Find2work
                        <button class="btn btn-xs btn-danger pull-right">
                            <b><i class="fa fa-eye"></i> Ver projeto</b>
                        </button>
                    </h3>
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