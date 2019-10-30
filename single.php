<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ampae
 */

get_header(); ?>
<div class="container">
		<main id="main" class="content-area" role="main">

		<?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/content', get_post_format());

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
