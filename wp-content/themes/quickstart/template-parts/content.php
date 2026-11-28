<?php
/**
 * Карточка записи.
 *
 * @package WordPressQuickstart
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<header class="entry__header">
		<?php the_title( '<h2 class="entry__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
		<p class="entry__meta">
			<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
				<?php echo esc_html( get_the_date() ); ?>
			</time>
		</p>
	</header>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="entry__thumbnail" href="<?php echo esc_url( get_permalink() ); ?>">
			<?php the_post_thumbnail( 'large' ); ?>
		</a>
	<?php endif; ?>
	<div class="entry__content"><?php the_excerpt(); ?></div>
</article>
