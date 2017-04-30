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

<?php get_footer(); ?>
