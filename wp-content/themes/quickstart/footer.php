<?php
/**
 * Подвал сайта.
 *
 * @package WordPressQuickstart
 */
?>
<footer class="site-footer">
    <div class="container site-footer__inner">
        <?php quickstart_the_menu( 'footer' ); ?>
        <p class="site-footer__copyright">
            &copy; <?php echo esc_html( wp_date( 'Y' ) ); ?>
            <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
        </p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
