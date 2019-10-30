<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ampae
 */

if ( ! is_active_sidebar( 'ampae-sidebar-main' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'ampae-sidebar-main' ); ?>
</aside><!-- #secondary -->
