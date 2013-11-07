<?php
/* 	Twitter widget 
		From How To Create A Twitter Widget
		By Daniel Pataki
*/
add_action ('admin_menu', 'my_theme_customizer');
function my_theme_customizer() {
        add_theme_page(
                __( 'Customize Theme Options', THEMENAME ),
                __( 'Customize Theme', THEMENAME ),
                'edit_theme_options',
                'customize.php'
        );
}

include( 'MyCustomizer.class.php' );

add_action( 'init', 'my_twitter_api' );
function my_twitter_api() {
	global $cb;
	$consumer_key = get_theme_mod( 'consumer_key' );
	$consumer_secret = get_theme_mod( 'consumer_secret' );
	$access_token = get_theme_mod( 'access_token' );
	$access_secret = get_theme_mod( 'access_secret' );

	include ('codebird.php');
	\Codebird\Codebird::setConsumerKey( $consumer_key, $consumer_secret );
	$cb = \Codebird\Codebird::getInstance();
	$cb->setToken( $access_token, $access_secret );
}

include( 'widgets/MyTwitterWidget.class.php' );

register Foo_Widget widget
add_action( 'widgets_init', function() { register_widget( 'Foo_Widget' ); } );
