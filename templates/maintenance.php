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

<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="container">
        <div vlass="row">
            <div class="col-12 text-center" id="copyright">
                <p class="text-muted">&copy;
                <a href="<?php echo esc_url( home_url() ); ?>">
                <?php bloginfo('name'); ?></a>
                <?php echo date('Y'); ?>. All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
