<?php

function followtindog_register_styles(){
wp_enqueue_style('follotindog-bootstrap',get_template_directory_uri()."/style.css",array('followtindog-style'),'all');
wp_enqueue_style('followtindog-style', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(),'4.4.1','all');
wp_enqueue_style('followtindog-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),'5.13.0','all');
wp_enqueue_style('followtindog-googlfonts',"https://fonts.googleapis.com/css?family=Montserrat|Ubuntu",array(),'5.13.0','all');
}
add_action('wp_enqueue_scripts','followtindog_register_styles');
function followtindog_register_scripts(){
    $version = wp_get_theme()->get('version');
    wp_enqueue_script('followtindog-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js',array(),'3.4.1',true);
    wp_enqueue_script('followdindog-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(),'1.16.0',true);
    wp_enqueue_script('followtindog-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(),'4.4.1',true);
    
}
add_action('wp_enqueue_scripts','followtindog_register_scripts');
    function tindog_theme_support(){

        
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('html5');
    }
/** 
 * Include primary navigation menu
 */
function themename_nav_init() {
    register_nav_menus( array(
      'menu-1' => 'Primary Menu',
    ) );
  }
  add_action( 'init', 'themename_nav_init' );


    /**
* Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
