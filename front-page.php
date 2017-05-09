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
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <!-- post tiles -->
    <?php if ( wp_count_posts() >= 3 ) :
      $args = array(
            'numberposts' => 3,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'meta_query' => array(array('key' => '_thumbnail_id'))
          );
      $recent_posts = wp_get_recent_posts( $args, ARRAY_A );

      // Makes sure the minimum posts have images
      $count_check = count( $recent_posts );
      if ( $count_check  = 3 ) {
        foreach($recent_posts as $recent_post) { ?>

          <article class="item col-md-4" id="tile-<?php the_ID(); ?>">
              <div class="tile">
                  <a href="<?php the_permalink(); ?>">
                      <img class="tile-image" src="<?php the_post_thumbnail_url( 'tile' ); ?>" alt="" id="post-image" />
                  </a>

                  <div <?php post_class(); ?>>
                      <div class="tile-block">
                      <?php if( get_the_title() ): ?>
                          <h4 class="tile-title"><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h4>
                      <?php else: ?>
                          <h4 class="tile-title"><a href="<?php the_permalink(); ?>">READ MORE</a></h4>
                      <?php endif; ?>

                          <?php the_excerpt(); ?>

                          <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Article</a>
                      </div>
                  </div>
              </div>
          </article>

    <?php }
      } endif; ?>

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
