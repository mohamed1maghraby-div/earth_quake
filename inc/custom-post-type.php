<?php
/*
@package quake-theme
==============================
    THEME CUSTOM POST TYPES
==============================
*/

$contact = get_option( 'activate_contact' );
if( @$contact == 1 ){
    add_action('init', 'quake_contact_custom_post_type');
    
    add_filter( 'manage_quake-contact_posts_columns', 'quake_set_contact_columns' ); //manage_........_posts_columns  this is statce 
    add_action('manage_quake-contact_posts_custom_column', 'quake_contact_custom_column', 10, 2 );
    add_action('add_meta_boxes', 'quake_contact_add_meta_box');
    add_action('save_post', 'quake_save_contact_email_data');
}

/* CONTACT CUSTOM POST TYPES */
function quake_contact_custom_post_type() {
    $labels = array(
        'name'              => 'Messages',
        'singular_name'     => 'Message',
        'menu_name'         => 'Messages',
        'mane_admin_bar'    => 'Message' 
    );
    $args = array(
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'capability_type'   => 'post',
        'hierarchical'      => false,
        'menu_position'     => 26,
        'menu_icon'         => 'dashicons-email-alt', // you can use url to put icon or dash-icon in wp
        'supports'          => array('title', 'editor', 'author')
    );
    register_post_type( 'quake-contact', $args );
}
function quake_set_contact_columns($columns){
    $newColumns = array();
    $newColumns['title'] = 'Full Name';
    $newColumns['message'] = 'Message';
    $newColumns['email'] = 'Email';
    $newColumns['date'] = 'Date';
    return $newColumns;
}

function quake_contact_custom_column( $column, $post_id ){
    switch( $column ){
        case 'message' :
            echo get_the_excerpt();
            break;
         case 'email' :
            //email colum
            $email = get_post_meta( $post_id, '_contact_email_value_key', true);
            echo '<a href="mailto:'.$email.'">'.$email.'</a>';
            break;
    }
}

/* CONTACT META BOXES */
function quake_contact_add_meta_box(){
    add_meta_box( 'contact_email', 'User Email', 'quake_contact_email_callback', 'quake-contact', 'side'); // normal: to put this under the text editor you can use side to put in the right
}

function quake_contact_email_callback( $post ){
    wp_nonce_field('quake_save_contact_email_data', 'quake_contact_email_meta_box_nonce' );
    
    $value = get_post_meta( $post->ID, '_contact_email_value_key', true);
    
    echo '<label for="quake_contact_email_field">User Email Adress: </lable>';
    echo '<input type="email" id="quake_contact_email_field" name="quake_contact_email_field" value=" ' . esc_attr($value) . ' " size="25" />';
}

function quake_save_contact_email_data( $post_id ){
    if( ! isset($_POST['quake_contact_email_meta_box_nonce']) ){
        return;
    }
    if( ! wp_verify_nonce($_POST['quake_contact_email_meta_box_nonce'], 'quake_save_contact_email_data') ){
        return;
    }
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        return;
    }
    if( ! current_user_can('edit_post', $post_id) ){
        return;
    }
    if ( ! isset($_POST['quake_contact_email_field'])){
        return;
    }
    $my_data = sanitize_text_field($_POST['quake_contact_email_field']);
    update_post_meta($post_id, '_contact_email_value_key', $my_data );
}







/*
===============
    email list
===============
*/
$contact = get_option( 'activate_contact' );
if( @$contact == 1 ){
    add_action('init', 'quake_email_custom_post_type');
    
    add_filter( 'manage_quake-email_posts_columns', 'quake_set_email_columns' ); //manage_........_posts_columns  this is statce 
    add_action('manage_quake-email_posts_custom_column', 'quake_email_custom_column', 10, 2 );
    add_action('add_meta_boxes', 'quake_email_add_meta_box');
    add_action('save_post', 'quake_save_email_list_data');
}

/* CONTACT CUSTOM POST TYPES */
function quake_email_custom_post_type() {
    $labels = array(
        'name'              => 'Email List',
        'singular_name'     => 'email_list',
        'menu_name'         => 'Email List',
        'mane_admin_bar'    => 'email_list' 
    );
    $args = array(
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'capability_type'   => 'post',
        'hierarchical'      => false,
        'menu_position'     => 26,
        'menu_icon'         => 'dashicons-email-alt', // you can use url to put icon or dash-icon in wp
        'supports'          => array('title', 'editor', 'author')
    );
    register_post_type( 'quake-email', $args );
}
function quake_set_email_columns($columns){
    $newColumns = array();
    $newColumns['email'] = 'Email';
    $newColumns['date'] = 'Date';
    return $newColumns;
}

function quake_email_custom_column( $column, $post_id ){
    switch( $column ){
         case 'email' :
            //email colum
            $email = get_post_meta( $post_id, '_contact_email_list_value_key', true);
            echo '<a href="mailto:'.$email.'">'.$email.'</a>';
            break;
    }
}

/* CONTACT META BOXES */
function quake_email_add_meta_box(){
    add_meta_box( 'email_list', 'User Email', 'quake_email_list_callback', 'quake-email', 'side'); // normal: to put this under the text editor you can use side to put in the right
}

function quake_email_list_callback( $post ){
    wp_nonce_field('quake_save_email_list_data', 'quake_contact_email_list_meta_box_nonce' );
    
    $value = get_post_meta( $post->ID, '_contact_email_list_value_key', true);
    
    echo '<label for="quake_contact_email_list_field">User Email Adress: </lable>';
    echo '<input type="email" id="quake_contact_email_list_field" name="quake_contact_email_list_field" value=" ' . esc_attr($value) . ' " size="25" />';
}

function quake_save_email_list_data( $post_id ){
    if( ! isset($_POST['quake_contact_email_list_meta_box_nonce']) ){
        return;
    }
    if( ! wp_verify_nonce($_POST['quake_contact_email_list_meta_box_nonce'], 'quake_save_email_list_data') ){
        return;
    }
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        return;
    }
    if( ! current_user_can('edit_post', $post_id) ){
        return;
    }
    if ( ! isset($_POST['quake_contact_email_list_field'])){
        return;
    }
    $my_data = sanitize_text_field($_POST['quake_contact_email_list_field']);
    update_post_meta($post_id, '_contact_email_list_value_key', $my_data );
}
