<?php
/**
 * Форма поиска.
 *
 * @package WordPressQuickstart
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php esc_html_e( 'Поиск:', 'wordpress-quickstart' ); ?></span>
        <input
            type="search"
            class="search-field"
            placeholder="<?php echo esc_attr_x( 'Поиск…', 'placeholder', 'wordpress-quickstart' ); ?>"
            value="<?php echo esc_attr( get_search_query() ); ?>"
            name="s"
        >
    </label>
    <button type="submit" class="search-submit"><?php esc_html_e( 'Найти', 'wordpress-quickstart' ); ?></button>
</form>
