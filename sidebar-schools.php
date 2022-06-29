<?php
if (!function_exists('twrfc_create_sidebars_schools')) :
  function twrfc_create_sidebars_schools()
  {
    register_sidebar(array(
      'name'          => __('TWRFC Schools Sponsors', 'twrfc'),
      'id'            => 'twrfc-schools-sponsors',
      'description'   => '',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>',
    ));
  }
  add_action('init', 'twrfc_create_sidebars_schools');
endif;
