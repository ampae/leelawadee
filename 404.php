<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ampae
 */

get_header(); ?>

		<main id="main" class="content-area-full" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<center>
						<h1 class="page-title"><?php esc_html_e('404! This page doesn\'t exist', 'leelawadee'); ?></h1>
					</center>
				</header><!-- .page-header -->

<center>
    <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></p>
</center>

<br />
				<section class="page-content container">
<center>
					<p class="sm"><?php esc_html_e('404. That\'s an error.', 'leelawadee'); ?></p>
					<p class="sm"><?php esc_html_e('The requested URL was not found on this server. That\'s all we know.', 'leelawadee'); ?></p>
</center>

				</section><!-- page-content container -->
			</section><!-- .error-404 -->

		</main><!-- #main -->

<?php
get_footer();
