<?php
/**
 * Шапка сайта.
 *
 * @package WordPressQuickstart
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Перейти к содержимому', 'quickstart' ); ?></a>
<header class="site-header">
	<div class="container site-header__inner">
		<?php quickstart_the_site_identity(); ?>
		<?php quickstart_the_menu( 'primary' ); ?>
	</div>
</header>
