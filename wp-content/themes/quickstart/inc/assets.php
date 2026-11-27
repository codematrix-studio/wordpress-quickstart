<?php
/**
 * Подключение ресурсов темы.
 *
 * @package WordPressQuickstart
 */

defined( 'ABSPATH' ) || exit;

/**
 * Подключает стили и скрипты темы.
 *
 * @return void
 */
function quickstart_enqueue_assets(): void {
    $theme_version  = wp_get_theme()->get( 'Version' );
    $style_path     = get_theme_file_path( 'assets/css/main.css' );
    $script_path    = get_theme_file_path( 'assets/js/main.js' );
    $style_version  = file_exists( $style_path ) ? (string) filemtime( $style_path ) : $theme_version;
    $script_version = file_exists( $script_path ) ? (string) filemtime( $script_path ) : $theme_version;

    wp_enqueue_style(
        'wordpress-quickstart-main',
        get_theme_file_uri( 'assets/css/main.css' ),
        array(),
        $style_version
    );

    wp_enqueue_script(
        'wordpress-quickstart-main',
        get_theme_file_uri( 'assets/js/main.js' ),
        array(),
        $script_version,
        array(
            'in_footer' => true,
            'strategy'  => 'defer',
        )
    );
}
add_action( 'wp_enqueue_scripts', 'quickstart_enqueue_assets' );
