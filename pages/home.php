<?PHP include( 'partials/header.php' ); ?>

<div id="wrapper" class="container">
    
    <div id="feed" class="col-md-6">
        
        <?PHP for( $i = 0; $i < 10; $i++ ) : ?>
        <div class="feed-item panel panel-default">
            
            <div class="panel-heading">
                <div class="avatar pull-left">
                    <img src="img/avatar.jpg" alt="">
                </div>
                <span class="action">
                    <a href="#">Gustavo Vilas Boas</a>
                    iniciou um
                    <a href="#">Novo Projeto</a>
                </span>
                <span class="date">
                    <a href="#">
                        4h <i class="fa fa-globe"></i>
                    </a>
                </span>
                <div class="clearfix"></div>
            </div><!-- cabecalho do feed -->
            
            <div class="panel-body">
                Basic panel example
                <div class="like-action line">
                    <a class="col-md-2" href="#"><i class="fa fa-heart"></i> Gostei </a>
                    <a class="col-md-3" href="#"><i class="fa fa-comment"></i> Comentar </a>
                </div>
            </div><!-- corpo da postagem -->

            <div class="panel-footer">
                
                <div class="line likes">
                    <small>
                        <i class="fa fa-heart"></i>
                        <b>Agatha Magalhaes e outras 46</b>
                    </small>
                </div><!-- likes -->

                <div class="line">

                    <?PHP for ( $j = 0; $j < 3; $j++ ) : ?>
                    <div class="comment">
                        <div class="aside">
                            <div class="avatar">
                                <img src="img/avatar.jpg" alt="">                                
                            </div>
                        </div>
                        <div class="body">
                            <a class="info">Agatha Magalhaes</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?PHP endfor; ?>

                </div><!-- comentarios -->
            </div>

        </div><!-- feed-item -->
        <?PHP endfor; ?>
    </div>

    <div class="col-md-offset-2 col-md-4">
        <h2>sidebar</h2>
    </div>

</div>