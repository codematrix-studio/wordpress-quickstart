<?php
/**
 * Plugin Name: Quickstart Tools
 * Description: Заготовка для собственных функциональных расширений проекта.
 * Version: 0.1.0
 * Requires at least: 6.5
 * Requires PHP: 8.1
 * Text Domain: quickstart-tools
 *
 * @package QuickstartTools
 */

defined( 'ABSPATH' ) || exit;

/**
 * Инициализирует расширение после загрузки WordPress.
 *
 * @return void
 */
function quickstart_tools_init(): void {
    // Добавляйте хуки и функциональность по мере появления конкретной задачи.
}
add_action( 'init', 'quickstart_tools_init' );
