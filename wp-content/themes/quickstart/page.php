<?php
/**
 * Шаблон обычной страницы.
 *
 * @package WordPressQuickstart
 */

get_header();
?>
<main id="primary" class="site-main container">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile;
	?>
</main>
<?php get_footer(); ?>
