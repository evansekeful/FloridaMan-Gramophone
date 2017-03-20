<?php
/**
 *******************************************************************************
 * Template Name: Maintenance Page
 *******************************************************************************
 * //templates/maintenance.php
 *******************************************************************************
 *
 * A full width page template.
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

<div class="jumbotron jumbotron-fluid error-page">
    <div class="container text-center error-page">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-justify">

            <?php the_content(); ?>

        </div>
    </div>
</div>
