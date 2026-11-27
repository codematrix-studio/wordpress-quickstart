<?php
/**
 * Вспомогательные функции шаблонов.
 *
 * @package WordPressQuickstart
 */

defined( 'ABSPATH' ) || exit;

/**
 * Выводит навигацию указанного расположения.
 *
 * @param string $location Идентификатор расположения меню.
 * @return void
 */
function quickstart_the_menu( string $location ): void {
    if ( ! has_nav_menu( $location ) ) {
        return;
    }

    $container_label = 'footer' === $location
        ? __( 'Навигация в подвале', 'quickstart' )
        : __( 'Основная навигация', 'quickstart' );

    wp_nav_menu(
        array(
            'theme_location'      => $location,
            'container'           => 'nav',
            'container_class'     => 'site-menu site-menu--' . sanitize_html_class( $location ),
            'container_aria_label' => $container_label,
            'fallback_cb'         => false,
        )
    );
}

/**
 * Выводит логотип или название сайта со ссылкой на главную страницу.
 *
 * @return void
 */
function quickstart_the_site_identity(): void {
    if ( has_custom_logo() ) {
        the_custom_logo();
        return;
    }
    ?>
    <a class="site-identity" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
    </a>
    <?php
}
