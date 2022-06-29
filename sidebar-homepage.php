<?php
if (!function_exists('twrfc_create_sidebars_homepage')) :
  function twrfc_create_sidebars_homepage()
  {
    register_sidebar(array(
      'name'          => __('TWRFC Homepage Sidebar', 'twrfc'),
      'id'            => 'twrfc-homepage-side-1',
      'description'   => '',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>',
    ));
  }
  add_action('init', 'twrfc_create_sidebars_homepage');
endif;
