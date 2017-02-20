<header class="navbar navbar-light navbar-toggleable-md bd-navbar">
    <nav class="container">

        <div class="collapse navbar-collapse" id="bd-main-nav">
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
        </div>
    </nav>
</header>
