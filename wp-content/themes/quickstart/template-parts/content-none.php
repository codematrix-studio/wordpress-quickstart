<?php
/**
 * Сообщение при отсутствии записей.
 *
 * @package WordPressQuickstart
 */
?>
<section class="no-results">
    <h1><?php esc_html_e( 'Ничего не найдено', 'wordpress-quickstart' ); ?></h1>
    <p><?php esc_html_e( 'Попробуйте изменить поисковый запрос или воспользуйтесь навигацией сайта.', 'wordpress-quickstart' ); ?></p>
    <?php get_search_form(); ?>
</section>
