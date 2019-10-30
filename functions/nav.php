<?php
/**
 * ampae functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ampae
**/

function register_ampae_menu()
{
    register_nav_menu('ampae_main_menu', __('Main Navigation', 'leelawadee'));
    register_nav_menu('ampae_footer_menu', __('Footer Navigation', 'leelawadee'));
}
add_action('init', 'register_ampae_menu');

function ampae_main_nav()
{
    $params = array(
    'menu'            => 'Main Navigation',
    'container'       => 'ul',
    'menu_class'      => '',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 3,
    'walker'          => '',
    'theme_location'  => 'ampae_main_menu',
    ); ?>
  <nav id="site-navigation" class="main-navigation" role="navigation">
  <div id="ampae-menu">
<?php
    wp_nav_menu($params); ?>
</div>
  </nav>
<?php
}

function ampae_footer_nav()
{
    $params = array(
    'menu'            => 'Footer Menu',
    'container'       => 'ul',
    'menu_class'      => '',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => '',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 3,
    'walker'          => '',
    'theme_location'  => 'ampae_footer_menu',
    ); ?>
  <nav id="footer-navigation" class="footer-navigation" role="navigation">
<?php
    wp_nav_menu($params); ?>
  </nav>
<?php
}

function ampae_pagination() {
  global $wp_query;

  if( get_option('permalink_structure') ) {
  	$format = 'page/%#%/';
  } else {
  	$format = '&paged=%#%';
  }
  $total = $wp_query->max_num_pages;
  if ( $total > 1 )  {
    if ( !$current_page = get_query_var('paged') ) {
         $current_page = 1;
    }
    echo '<div class="paging-navigation-outer">';
    echo paginate_links(array(
    	'base'     => get_pagenum_link(1) . '%_%',
    	'format'   => $format,
      'current'  => $current_page,
      'total'    => $total,
      'mid_size' => 4,
    ));
    echo '</div>';
  }
}
