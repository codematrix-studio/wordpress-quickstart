<?php
/**
 * Настройка возможностей темы.
 *
 * @package WordPressQuickstart
 */

defined( 'ABSPATH' ) || exit;

/**
 * Регистрирует поддержку возможностей WordPress и меню темы.
 *
 * @return void
 */
function quickstart_setup(): void {
    load_theme_textdomain( 'wordpress-quickstart', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 120,
        'width'       => 320,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    register_nav_menus( array(
        'primary' => __( 'Основное меню', 'wordpress-quickstart' ),
        'footer'  => __( 'Меню в подвале', 'wordpress-quickstart' ),
    ) );
}
add_action( 'after_setup_theme', 'quickstart_setup' );
