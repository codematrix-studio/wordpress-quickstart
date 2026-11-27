<?php
/**
 * Содержимое страницы.
 *
 * @package WordPressQuickstart
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--page' ); ?>>
    <header class="entry__header"><?php the_title( '<h1 class="entry__title">', '</h1>' ); ?></header>
    <div class="entry__content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div>
</article>
