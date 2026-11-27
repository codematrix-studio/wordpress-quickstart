<?php
/**
 * Шаблон главной страницы.
 *
 * @package WordPressQuickstart
 */

get_header();
?>
<main class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <div class="container">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>
