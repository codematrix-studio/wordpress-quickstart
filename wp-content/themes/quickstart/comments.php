<?php
/**
 * Шаблон комментариев.
 *
 * @package WordPressQuickstart
 */

defined( 'ABSPATH' ) || exit;

if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			/* translators: %s — количество комментариев. */
			printf(
				esc_html(
					_n(
						'Комментарий: %s',
						'Комментарии: %s',
						get_comments_number(),
						'quickstart'
					)
				),
				esc_html( number_format_i18n( get_comments_number() ) )
			);
			?>
		</h2>
		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>
		<?php the_comments_navigation(); ?>
	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Обсуждение закрыто.', 'quickstart' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>
</section>
