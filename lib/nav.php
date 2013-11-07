<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'primary-nav' => __( 'Primary Nav' ),
      'secondary-nav' => __( 'Secondary Nav' ),
			'footer-nav' => __( 'Footer Nav' ),
			'projects-nav' => __( 'Projects Nav' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
		if( $post->post_parent ) {
			$post_data = get_post( $post->post_parent );
			$classes[] = $post->post_type . '-' . $post_data->post_name;
		}
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

function add_active_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
add_filter('nav_menu_css_class' , 'add_active_class' , 10 , 2);
