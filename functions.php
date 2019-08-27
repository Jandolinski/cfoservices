<?php

function theme_setup() {
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter( 'widget_text', 'do_shortcode' );
add_action('after_setup_theme', 'theme_setup');

require get_template_directory(). '/inc/customizer.php';