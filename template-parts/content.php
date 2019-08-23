<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ampae
 */

?>

<?php

$tmpPostClass = array ('hentry');

$tmpHeading = 'h2';

if ('post' === get_post_type() && is_single()) {
	$tmpPostClass[] = 'single-post';
	// $tmpHeading = 'h1';
} else {
	$tmpPostClass[] = 'multi-post';
	// $tmpHeading = 'h2';
}
?>


<article id="post-<?php the_ID(); ?>" <?php post_class( $tmpPostClass ); ?>>

	<figure>
	    <div class="panel-thumbnail">

<?php
    if (has_post_thumbnail()) {
        the_post_thumbnail('full');
    }
/*
		else {
			echo '<img src="' . esc_url( get_template_directory_uri() ) . '/images/no-image.jpg" alt="no-image" />';
		}
*/
?>
		</div>
	</figure>
	<header class="entry-header">
		<section class="author">
<?php
    echo '<a class="byline author vcard" href="#">'.get_avatar(get_the_author_meta('ID'), 50).' &bull; '.get_the_author().'</a>'; // &bull; <span class="small lead"> &bull; </span>
?>
		</section>

		<section class="time-loc">
			<time class="updated" datetime="<?php echo get_the_date('Y-m-d'); ?>">
				<!--
				<a href="<?php //echo esc_url(get_permalink()); ?>" rel="bookmark">
				-->
				<?php echo get_the_date(); ?>
			</time>
<?php
		//echo "<location lat='' long=''></location>";
?>
		</section>

	</header><!-- .entry-header -->

	<section class="entry-content">
		<?php


        if (is_single()) {
            the_title('<'.$tmpHeading.' class="entry-title">', '</'.$tmpHeading.'>');

            the_content(sprintf(
                /* translators: %s: Name of current post. */
                wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'leelawadee'), array( 'span' => array( 'class' => array() ) )),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            ));
        } else {
          the_title('<'.$tmpHeading.' class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></'.$tmpHeading.'>');
        	echo '<p>' . the_excerpt_max_charlength(get_the_excerpt(), 160) . ' [...]</p>';
				}
?>
<br />
	</section><!-- .entry-content -->

	<footer class="entry-footer">

<?php
        if ('post' === get_post_type() && !is_single()) {
            ?>

<div class="pull-right">
<a class="btn btn-small btn-orange-inverse" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html_e('read | comment','leelawadee'); ?></a>
</div>

	<p class="">
	<a href="<?php echo esc_url(get_permalink()); ?>">
<?php
            echo get_comments_number() .' '. esc_html_e('comments','leelawadee'); ?>
	</a></p>

<?php
        }
the_category(' | '); ?> <br /> <?php the_tags(' # ');
//ampae_entry_footer();
?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
