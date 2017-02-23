<?php
/**
 *******************************************************************************
 * //front-page.php
 *******************************************************************************
 *
 * The front page.
 *
 * CODEX REF
 * https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/
?>

<?php get_header(); ?>

    <div class="jumbotron-fluid frontpage header">
        <?php if ( get_header_image() ) : ?>
            <div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </a>
            </div>
        <?php else: ?>
              <div class="container">
                  <h1><?php echo get_bloginfo('name'); ?></h1>
                  <p><?php echo get_bloginfo('description'); ?></p>
              </div>
        <?php endif; ?>
    </div>

    <?php render_navbar(); ?>

    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>

    <div class="container">
        <div class="row">
            <!-- widget area 1 -->
            <div class="col-md-4">
            <?php if ( dynamic_sidebar( 'front-left' ) ); ?>
            </div>

            <!-- widget area 2 -->
            <div class="col-md-4">
            <?php if ( dynamic_sidebar( 'front-center' ) ); ?>
            </div>

            <!-- widget area 3 -->
            <div class="col-md-4">
            <?php if ( dynamic_sidebar( 'front-right' ) ); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
