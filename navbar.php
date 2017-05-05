<nav class="navbar navbar-light navbar-toggleable-md bd-navbar clearfix transparent">
      <div class="container-fluid">
        <div class="navbar-header container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bd-main-nav" aria-controls="bd-main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <?php if ( ! has_custom_logo() ) { ?>
                <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            <?php }
                  else {
                    the_custom_logo();
                  } ?>
        </div>
      </div>

        <div class="collapse navbar-collapse nav navbar-nav" id="bd-main-nav">
            <ul class="nav navbar-nav mr-auto">

                <?php
                    wp_nav_menu( array(
                        'menu'           => 'primary',
                        'theme_location' => 'primary',
                        'depth'          => 1,
                        'container'      => "ul",
                        'menu_class'     => "navbar-nav mr-auto",
                        'fallback_cb'    => 'bootstrap_walker::fallback',
                        'walker'         => new Bootstrap_Walker()
                    ) );
                ?>

            </ul>
        </nav>
      </div>
</nav>
