<?php
/**
 * Содержимое отдельной записи.
 *
 * @package WordPressQuickstart
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--single' ); ?>>
	<header class="entry__header">
		<?php the_title( '<h1 class="entry__title">', '</h1>' ); ?>
		<p class="entry__meta">
			<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
				<?php echo esc_html( get_the_date() ); ?>
			</time>
		</p>
	</header>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry__thumbnail"><?php the_post_thumbnail( 'large' ); ?></div>
	<?php endif; ?>
	<div class="entry__content">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</div>
</article>
