<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ampae
 */

get_header(); ?>
<div class="container">
		<main id="main" class="content-area" role="main">
			<?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'page');

                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
		</main><!-- #main -->

<?php
get_sidebar();
?>
</div><!-- container -->
<?php
get_footer();
