<?php
/**
 * Шаблон отдельной записи.
 *
 * @package WordPressQuickstart
 */

get_header();
?>
<main id="primary" class="site-main container">
    <?php
    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content', 'single' );

        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }
    endwhile;
    ?>
</main>
<?php get_footer(); ?>
