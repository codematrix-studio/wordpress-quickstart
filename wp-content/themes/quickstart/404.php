<?php
/**
 * Шаблон страницы 404.
 *
 * @package WordPressQuickstart
 */

get_header();
?>
<main id="primary" class="site-main container">
    <section class="error-404">
        <h1><?php esc_html_e( 'Страница не найдена', 'quickstart' ); ?></h1>
        <p><?php esc_html_e( 'Возможно, адрес изменился или страница была удалена.', 'quickstart' ); ?></p>
        <?php get_search_form(); ?>
        <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Вернуться на главную', 'quickstart' ); ?></a></p>
    </section>
</main>
<?php get_footer(); ?>
