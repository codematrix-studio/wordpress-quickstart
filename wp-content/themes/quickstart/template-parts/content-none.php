<?php
/**
 * Сообщение при отсутствии записей.
 *
 * @package WordPressQuickstart
 */

?>
<section class="no-results">
	<h2><?php esc_html_e( 'Ничего не найдено', 'quickstart' ); ?></h2>
	<p><?php esc_html_e( 'Попробуйте изменить поисковый запрос или воспользуйтесь навигацией сайта.', 'quickstart' ); ?></p>
	<?php get_search_form(); ?>
</section>
