<header class="navbar navbar-light navbar-toggleable-md bd-navbar transparent">
    <nav class="container">

        <div class="d-flex justify-content-between hidden-lg-up">
            <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
              <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                  }
                else {
                    bloginfo( 'name' );
                  }
              ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bd-main-nav" aria-controls="bd-main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bd-main-nav">
            <ul class="nav navbar-nav mr-auto">

                <li class="nav-item active hidden-md-down">
                    <a class="nav-item nav-link active" href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a>
                </li>

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
        </div>
    </nav>
</header>
