<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ampae
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="site-info">

        <div class="grid">
            <div class="grid-cell">
                <center>
                    <?php
                      if ( get_theme_mod( 'ampae_logo' ) ) : ?>
                        <img src="<?php echo esc_url( get_theme_mod( 'ampae_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        <?php
                      else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Icon-64.png" alt="logo-footer" />
                            <?php endif; ?>
                </center>
            </div>
        </div>

        <div class="grid container">
            <?php if ( is_active_sidebar( 'ampae-sidebar-footer' ) ) { ?>
                <?php dynamic_sidebar( 'ampae-sidebar-footer' ); ?>
                    <?php } ?>
        </div>

        <div class="grid">
            <div class="grid-cell">
                <center>
                    <?php
                    ampae_footer_nav();
                    ?>
                </center>
            </div>
        </div>

        <div class="grid">
            <div class="grid-cell">
                <center>
                    <span>Copyright &copy; <?php echo date('Y'); ?> <a class="greylink" href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a> | All Rights Reserved</span>
                </center>
            </div>
        </div>

    </div><!-- site-info -->

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
