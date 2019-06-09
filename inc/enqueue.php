<?php
/*
@package quake-theme
==============================
    ADMIN ENQUEUE FUNCTIONS
==============================
*/

function quake_load_admin_scripts( $hook ){
   // echo $hook; 
	if('index.php' == $hook){
		wp_register_script('quake1-update', 'https://www.quaketheme.com/js/quake1_update.js', array('jquery'), '1.0.0', false );
        wp_enqueue_script('quake1-update');
	}
    if ('toplevel_page_earth_quake' == $hook){
        
        wp_register_style('quake_admin', get_template_directory_uri() . '/css/quake.admin.css', array(), '1.0.0', 'all');
        wp_enqueue_style('quake_admin');

        wp_enqueue_media();

        wp_register_script('quake-admin-script', get_template_directory_uri() .'/js/quake.admin.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script('quake-admin-script');
        
        
     }//else 
        if ('quake_page_earth_quake_theme_r' == $hook){

        wp_enqueue_script('wp-color-picker-alpha', get_template_directory_uri() . '/js/wp-color-picker-alpha.min.js', array('wp-color-picker'), '1.2.2', true);
        
        wp_enqueue_style( 'wp-color-picker' );
        
        wp_enqueue_script('ace', get_template_directory_uri() . '/js/ace/ace.js', array('jquery'), '1.2.1', true);
        
        wp_enqueue_media();

        wp_register_script('quake-admin-script', get_template_directory_uri() .'/js/quake.admin.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script('quake-admin-script');
        
        wp_enqueue_script('quake-custom-css-script', get_template_directory_uri() .'/js/quake.custom_css.js', array('jquery'), '1.0.0', true );
        
        
        //bootstarap admin
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
        
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
    }//else{ return;}
    if('quake_page_earth_quake_general_information' == $hook){
        //bootstarap admin
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
        
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
		
		wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri(). '/js/jquery.js', false, '1.11.3', false);
		
		wp_enqueue_script('quake-custom-css-script', get_template_directory_uri() .'/js/quake.custom_css.js', array('jquery'), '1.0.0', true );
    }
}
add_action('admin_enqueue_scripts', 'quake_load_admin_scripts' );

function custom_populor_css_js(){
            wp_register_style('quake-admin-theme-options', get_template_directory_uri() . '/css/quake_admin_theme_options.css', array(), '1.0.0', 'all');
        wp_enqueue_style('quake-admin-theme-options');
    
}
add_action('admin_enqueue_scripts', 'custom_populor_css_js');

/*

==============================
    FRONT-END ENQUEUE FUNCTIONS
==============================
*/


function quake_load_scripts(){
     
            //bootstarap
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
    
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri(). '/js/jquery.js', false, '1.11.3', true);
        wp_enqueue_script('jquery');
    
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
    
        wp_enqueue_script( 'earth_quake', get_template_directory_uri() . '/js/earth_quake.js', array('jquery'), '1.0.0', true );
   
        wp_enqueue_style( 'earth_quake', get_template_directory_uri() . '/css/earth_quake.css', array(), '1.0.0', 'all' );
    
    
        wp_enqueue_script( 'nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', array('jquery'), '3.7.3', true );
}
add_action('wp_enqueue_scripts', 'quake_load_scripts');