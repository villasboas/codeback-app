<?PHP include( 'partials/header.php' ); ?>

<div class="container">
    <div id="times" class="col-md-8">

        <div class="actions col-md-12">
            <button class="btn btn-success z-depth-1">
                <i class="fa fa-plus"></i> <b>Novo time</b>
            </button>
        </div>

        <?PHP for( $i = 0; $i < 3; $i++ ) : ?>
        <div class="time col-md-6">
            <div class="time-item panel panel-default">
            
                <div class="panel-heading">
                    <h3 class="panel-title pull-left">
                        <a href="#">Helpper <span class="badge">42</span></a>
                    </h3>
                    <div class="pull-right">
                        <button class="btn btn-xs btn-primary">
                            <b><i class="fa fa-eye"></i> Ver time</b>
                        </button>
                        <button class="btn btn-xs btn-primary">
                            <b><i class="fa fa-cog"></i></b>
                        </button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- cabecalho do feed -->
                
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div><!-- corpo da projeto -->

                <ul class="list-group">
                    <?PHP for( $j = 0; $j < 4; $j++ ): ?>
                    <li class="list-group-item">
                        <div class="avatar col-sm-1 hidden-xs">
                            <img src="img/avatar.jpg">
                        </div><!-- avatar do usuario-->

                        <div class="col-sm-4 col-xs-6">
                            <a href="#">@villasboas</a>
                        </div><!-- nome de usuario -->
                        
                        <div class="col-sm-4 col-xs-6 btn-group">
                            <button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <b>Desenvolvedor</b> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div><!-- mudar cargo -->
                        
                        <div class="col-sm-3">
                            <button class="btn btn-xs btn-danger btn-block">
                                <b>Remover</b>
                            </button>
                        </div><!-- botao de remover -->

                        <div class="clearfix"></div>
                    </li>
                    <?PHP endfor; ?>
                </ul><!-- integrantes do time -->

            </div><!-- feed-item -->
        </div>
        <?PHP endfor; ?>
    </div>
    <div class="col-md-4">
        <h3>sidebar</h3>
    </div>
</div>