<?php
/**
 * Резервный шаблон вывода записей.
 *
 * @package WordPressQuickstart
 */

get_header();
?>
<main id="primary" class="site-main container">
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
