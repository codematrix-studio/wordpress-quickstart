<?php
/**
 * Шаблон архивов.
 *
 * @package WordPressQuickstart
 */

get_header();
?>
<main class="site-main container">
    <header class="archive-header">
        <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
        <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
    </header>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>
            <?php get_template_part( 'template-parts/content' ); ?>
        <?php endwhile; ?>
        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
