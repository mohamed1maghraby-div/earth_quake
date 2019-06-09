<?php
/*
    @package earth_quake
    ==============================
           SHORTCODE OPTIONS
    ==============================
*/ 
function quake_tooltip( $atts, $content = null ){
    //[tooltip placement="top" title="this is the title" ]this is the content[/tooltip]
    //get the attributes
    $atts = shortcode_atts(
        array(
            'placement' => 'top',
            'title' => '',
        ),
        $atts,
        'tooltip'
                          );
    $title = ( $atts['title'] == '' ? $content : $atts['title'] );
    
    //return HTML
    return '<span class="quake-tooltip" data-toggle="tooltip" data-placement="'.$atts['placement'].'" title="'.$title.'">'.$content.'</span>';
}

add_shortcode( 'tooltip', 'quake_tooltip' );

function quake_popover( $atts, $content = null ){
    /*[popover title="Popover title" placement="top" trigger="click" content="this is the popover content"] this is the clickable content [/popover]*/
     $atts = shortcode_atts(
        array(
            'placement' => 'top',
            'title' => '',
            'trigger' => 'click',
            'content' => '',
        ),
        $atts,
        'popover'
                          );
    
    //return HTML
    return '<span class="quake-popover" data-toggle="popover" data-placement="'.$atts['placement'].'" title="'.$atts['title'].'" data-trigger="'.$atts['trigger'].'" data-content="'.$atts['content'].'">'.$content.'</span>';
}
add_shortcode( 'popover', 'quake_popover' );

//Contact Form shortcode
function quake_contact_form( $atts, $content = null ){
    //[contact_form]
    //get the attributes
    $atts = shortcode_atts(
        array(),
        $atts,
        'contact_form'
                          );
    
    //return HTML
    ob_start();
    include 'templates/contact-form.php';
    
    return ob_get_clean();
}
add_shortcode( 'contact_form', 'quake_contact_form' );