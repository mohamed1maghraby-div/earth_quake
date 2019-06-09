<?php
/*
@package quake-theme
==============================
    1-options
==============================
*/

function quake_sidebar_options(){
    echo'Customize Your Sidebar Information';
}
function quake_sidebar_profile(){
    $picture =esc_attr( get_option( 'profile_picture' ) );
    if( empty($picture) ){
         echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button"/><input type="hidden" id="profile-picture" name="profile_picture" value=""/>';
    }else{
         echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-button"/><input type="hidden" id="profile-picture" name="profile_picture" value="'.$picture.'"/><input type="button" class="button button-secondary" value="Remove" id="remove-picture"/>';
    }
   
}
function quake_sidebar_name(){
    $firstName =esc_attr( get_option( 'first_name' ) );
    $lastName =esc_attr( get_option( 'last_name' ) );
    echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name"/>
    <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name"/>';
}
function quake_sidebar_description(){
    $description =esc_attr( get_option( 'user_description' ) );
    echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description"/><p class="description">Write Something Smart.</p>';
}
function quake_sidebar_twitter(){
    $twitter =esc_attr( get_option( 'twitter_handler' ) );
    echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler"/><p class="description">Input Your Twitter Username Without @ Character.</p>';
}
function quake_sidebar_facebook(){
    $facebook =esc_attr( get_option( 'facebook_handler' ) );
    echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook handler"/>';
}
function quake_sidebar_gplus(){
    $gplus =esc_attr( get_option( 'gplus_handler' ) );
    echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Gplus handler"/>';
}
//Sansitization Settings for filters any chracters
function quake_sanitize_twitter_handler( $input ){
    $output = sanitize_text_field( $input ); // for html charcters
    $output = str_replace('@', '', $output); // for @ chracter
    return $output;
}