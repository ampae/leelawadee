<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ampae
 */

?>

<div calss="page">
	<div class="entry-content">

<?php

//$template = get_post_meta($post->ID, '_wp_page_template', true);

            the_content();
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'leelawadee'),
                'after'  => '</div>',
            ));
?>

	</div><!-- .entry-content -->
</div><!-- .page -->

<?php if (has_post_thumbnail($post->ID)): ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
<style>
  #site-header {
    background-image: url('<?php echo esc_url($image[0]); ?>');
  }
</style>
<?php endif; ?>
