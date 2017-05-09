<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php if ( ! has_custom_logo() ) { ?>
      <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
  <?php }
        else {
          the_custom_logo();
        } ?>

  <div class="collapse navbar-collapse" id="navbarNav"> 
      <ul class="navbar-nav">
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
