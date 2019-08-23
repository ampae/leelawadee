<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ampae
 */

get_header(); ?>
<section class='container'>
		<main id="main" class="content-area" role="main">
<?php	woocommerce_content(); ?>
		</main><!-- #main -->
<?php
get_sidebar('ampae-sidebar-shop');
?>
</section><!-- container -->
<?php
get_footer();
