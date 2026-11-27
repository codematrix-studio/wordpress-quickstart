<?php
/**
 * Шаблон результатов поиска.
 *
 * @package WordPressQuickstart
 */

get_header();
?>
<main id="primary" class="site-main container">
    <header class="archive-header">
        <h1 class="archive-title">
            <?php
            printf(
                /* translators: %s — поисковый запрос. */
                esc_html__( 'Результаты поиска: %s', 'quickstart' ),
                esc_html( get_search_query() )
            );
            ?>
        </h1>
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
