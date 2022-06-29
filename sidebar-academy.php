<?php
if (!function_exists('twrfc_create_sidebars_academy')) :
  function twrfc_create_sidebars_academy()
  {
    register_sidebar(array(
      'name'          => __('TWRFC Academy Sponsors', 'twrfc'),
      'id'            => 'twrfc-academy-sponsors',
      'description'   => '',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>',
    ));
  }
  add_action('init', 'twrfc_create_sidebars_academy');
endif;
