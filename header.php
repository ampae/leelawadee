<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

</head>

<body <?php body_class('rtl'); ?>>
<div id="page" class="site">

	<header id="banner" class="site-header" role="banner">

		<section class="site-branding">
        <div class="row container">

            <div class="col span2 logo">
                <a id="logo" href="<?php echo esc_url( home_url() ); ?>">


<?php
if (get_theme_mod('ampae_logo')) : ?>
<img src="<?php echo esc_url( get_theme_mod('ampae_logo') ); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" >

<?php
else : ?> <h1 class="site-title"><?php bloginfo('name'); ?></h1>
<?php endif; ?>

                </a>
            </div>

            <div class="col span9">
<?php
      ampae_main_nav();
?>
            </div>

        </div><!-- row -->
<!--
        <div class="row container">
          <div class="col span12 sp">
<?php

    //ampae_main_nav();

?>
          </div>
        </div>
-->

</section><!-- .site-branding -->

<?php if (get_header_image()) :?>
	<section id="site-header">
		<center>
		<?php
wp_title(' ', true, 'right');
?>
</center>
	</section>
<?php endif;?>

</header><!-- #banner -->

<div id="content" class="site-content">
