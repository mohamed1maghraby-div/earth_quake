<?php
/*
@package quake-theme
==============================
    ADMIN PAGE
==============================
*/
function quake_add_admin_page() {
    //Generate quake admin page
    add_menu_page('quake theme options', 'quake', 'manage_options', 'earth_quake', 'quake_theme_create_page', get_template_directory_uri() . '/img/sunset-icon.png', 3 );
    //Generate quake admin sub page   
    //create profile widget page
    add_submenu_page('earth_quake', 'quake theme options', 'profile widget', 'manage_options', 'earth_quake','quake_theme_create_page');
    
    //create General Information page
    add_submenu_page('earth_quake', 'quake theme options', 'General Information', 'manage_options', 'earth_quake_general_information','quake_theme_general_information');
    
    //create option theme support
    add_submenu_page('earth_quake', 'Quake Theme Options', 'Theme Options', 'manage_options', 'earth_quake_theme', 'quake_theme_support_page');
    
    //create contact page
    add_submenu_page('earth_quake', 'Quake Contact Form', 'Contact Form', 'manage_options', 'earth_quake_theme_contact', 'quake_contact_form_page');
}
add_action('admin_menu', 'quake_add_admin_page');
//activate custpm settings
add_action('admin_init', 'quake_custom_settings');

function quake_custom_settings(){
    //options
    register_setting('quake-settings-group', 'profile_picture');
    register_setting('quake-settings-group', 'first_name');
    register_setting('quake-settings-group', 'last_name');
    register_setting('quake-settings-group', 'user_description');
    register_setting('quake-settings-group', 'twitter_handler', 'quake_sanitize_twitter_handler');
    register_setting('quake-settings-group', 'facebook_handler');
    register_setting('quake-settings-group', 'gplus_handler');
    add_settings_section('quake-sidebar-options', 'Sidebar Options', 'quake_sidebar_options','earth_quake');
    add_settings_field('sidebar-profile-picture', 'Profile Picture', 'quake_sidebar_profile', 'earth_quake', 'quake-sidebar-options');
    add_settings_field('sidebar-name', 'Full Name', 'quake_sidebar_name', 'earth_quake', 'quake-sidebar-options');
    add_settings_field('sidebar-description', 'Description', 'quake_sidebar_description', 'earth_quake', 'quake-sidebar-options');
    add_settings_field('sidebar-twitter', 'Twitter Handler', 'quake_sidebar_twitter', 'earth_quake', 'quake-sidebar-options');
    add_settings_field('sidebar-facebook', 'Facebook Handler', 'quake_sidebar_facebook', 'earth_quake', 'quake-sidebar-options');
    add_settings_field('sidebar-gplus', 'Google+ Handler', 'quake_sidebar_gplus', 'earth_quake', 'quake-sidebar-options');
    
    //Theme Support Options
    register_setting('quake-theme-support', 'post_formats');
    register_setting('quake-theme-support', 'custom_header');
    register_setting('quake-theme-support', 'custom_background');
    add_settings_section('quake-theme-options','Theme Options', 'quake_theme_options', 'earth_quake_theme');
    add_settings_field('post-formats', 'Post Formats', 'quake_post_formats', 'earth_quake_theme', 'quake-theme-options');
    add_settings_field('custom-header', 'Custom Header', 'quake_custom_header', 'earth_quake_theme', 'quake-theme-options');
    add_settings_field('custom-background', 'Custom Background', 'quake_custom_background', 'earth_quake_theme', 'quake-theme-options');
    
    //Contact Form Options
    register_setting('quake-contact-options', 'activate_contact');
    add_settings_section('quake-contact-section', 'Contact Form', 'quake_contact_section', 'earth_quake_theme_contact');
    add_settings_field('activate-form', 'Activate Contact Form', 'quake_activate_contact', 'earth_quake_theme_contact', 'quake-contact-section');
    

}

//Contact Form Options

function quake_contact_section(){
    echo 'Activate and Deactivate The Built-in Contact Form';
}
function quake_activate_contact(){ //function for checkbox display and prevue
    $options = get_option( 'activate_contact' ) ;
        $checked = ( @$options == 1 ? 'checked' : '');
        echo '<label><input type="checkbox" id="custom_header" name="activate_contact" value="1" '.$checked.' /></label><br>';
}



//theme options page
function quake_theme_options(){
    echo 'Activate and Deactivate Specific Theme Support Options';
}
function quake_post_formats(){ //function for checkbox display and prevue
    $options = get_option( 'post_formats' ) ;
    $formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
    $output='';
    foreach ( $formats as $format ){
        $checked = ( @$options[$format] == 1 ? 'checked' : '');
        $output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' />'.$format.'</label><br>';
    }
    echo $output;
}

function quake_custom_header(){ //function for checkbox display and prevue
    $options = get_option( 'custom_header' ) ;
        $checked = ( @$options == 1 ? 'checked' : '');
        echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" '.$checked.' />Activate The Custom Header</label><br>';
}
function quake_custom_background(){ //function for checkbox display and prevue
    $options = get_option( 'custom_background' ) ;
        $checked = ( @$options == 1 ? 'checked' : '');
        echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" '.$checked.' />Activate The Custom Background</label>';
}
//1-options
require_once( get_template_directory() . '/inc/options/options.php' );

require_once( get_template_directory() . '/inc/options/general_info.php' );

require_once( get_template_directory() . '/inc/options/x.php' );



//template submenu functions
function quake_theme_create_page(){
    require_once( get_template_directory() . '/inc/templates/quake-admin.php' );
}
function quake_theme_support_page(){
    require_once( get_template_directory() . '/inc/templates/quake-theme-support.php' );
}
function quake_contact_form_page(){
    require_once( get_template_directory() . '/inc/templates/quake-contact-form.php' );
}
function quake_theme_setiings_page(){
    require_once( get_template_directory() . '/inc/templates/quake-custom-css.php' );
}
