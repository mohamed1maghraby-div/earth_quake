<?php
/*
@package quake-theme
==============================
    THEME SUPPORT PAGE
==============================
*/
$options = get_option( 'post_formats' ) ;
$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
$output = array();
    foreach ( $formats as $format ){
        $output[] = ( @$options[$format] == 1 ? $format : '');
    }
if ( !empty( $options ) ){
    add_theme_support('post-formats', $output );
}

$header = get_option( 'custom_header' );
if( @$header == 1 ){
    add_theme_support( 'custom-header' );
}

$background = get_option( 'custom_background' );
if( @$background == 1 ){
    add_theme_support( 'custom-background' );
}
add_theme_support('post-thumbnails');
    
/* ACTIVATE NAV MENU OPTION */
function quake_register_nav_menu(){
    register_nav_menu('Main_nav', 'Main Navigation Menu');
}
add_action('after_setup_theme', 'quake_register_nav_menu');

/* Activate HTML% features */
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
/*
==============================
    SIDEBAR FUNCTIONS
==============================
*/
 //sidebar function
function quake_sidebar_init(){
    
    register_sidebar(
        array(
                'name'          => esc_html__('Quake Sidebar', 'earthquake'),
                'id'            => 'quake-sidebar',
                'description'   => 'Dynamic Right Sidebar',
                'before_widget' => '<section id="%1$s" class="quake-widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="quake-widget-title">',
                'after_title'   => '</h2>'
        )
    ); 
    
}
add_action('widgets_init', 'quake_sidebar_init');

 //vertical menu
function quake_vertical_menu_init(){
    
    register_sidebar(
        array(
                'name'          => esc_html__('Quake vertical menu', 'earthquake'),
                'id'            => 'quake-vertical-menu',
                'description'   => 'Dynamic Left vertical menu',
                'before_widget' => '<section id="%1$s" class="quake-widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="quake-widget-title">',
                'after_title'   => '</h2>'
        )
    ); 
    
}
add_action('widgets_init', 'quake_vertical_menu_init');

 //footer widgets-1
function quake_footer_widgets_1(){
    
    register_sidebar(
        array(
                'name'          => esc_html__('Footer Widgets 1', 'earthquake'),
                'id'            => 'footer-widgets-1',
                'description'   => 'Dynamic Footer Widgets 1',
                'before_widget' => '<section id="%1$s" class="quake-widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="quake-widget-title">',
                'after_title'   => '</h2>'
        )
    ); 
    
}
add_action('widgets_init', 'quake_footer_widgets_1');

 //footer widgets-2
function quake_footer_widgets_2(){
    
    register_sidebar(
        array(
                'name'          => esc_html__('Footer Widgets 2', 'earthquake'),
                'id'            => 'footer-widgets-2',
                'description'   => 'Dynamic Footer Widgets 2',
                'before_widget' => '<section id="%1$s" class="quake-widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="quake-widget-title">',
                'after_title'   => '</h2>'
        )
    ); 
    
}
add_action('widgets_init', 'quake_footer_widgets_2');

//footer widgets-3
function quake_footer_widgets_3(){
    
    register_sidebar(
        array(
                'name'          => esc_html__('Footer Widgets 3', 'earthquake'),
                'id'            => 'footer-widgets-3',
                'description'   => 'Dynamic Footer Widgets 3',
                'before_widget' => '<section id="%1$s" class="quake-widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="quake-widget-title">',
                'after_title'   => '</h2>'
        )
    ); 
    
}
add_action('widgets_init', 'quake_footer_widgets_3');

//footer widgets-4
function quake_footer_widgets_4(){
    
    register_sidebar(
        array(
                'name'          => esc_html__('Footer Widgets 4', 'earthquake'),
                'id'            => 'footer-widgets-4',
                'description'   => 'Dynamic Footer Widgets 4',
                'before_widget' => '<section id="%1$s" class="quake-widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="quake-widget-title">',
                'after_title'   => '</h2>'
        )
    ); 
    
}
add_action('widgets_init', 'quake_footer_widgets_4');
/*
==============================
    BLOG LOOP CUSTOM FUNCTIONS
==============================
*/
function quake_posted_meta(){
    $posted_on = human_time_diff( get_the_time('U'), current_time('timestamp') );
    $categories = get_the_category();
    $separator = ', ';
    $output = '';
    $i = 1;
    
    if( !empty($categories) ):
        foreach( $categories as $category):
    if( $i > 1): $output .= $separator; endif;
            $output .= '<a href="'.esc_url( get_category_link( $category->term_id ) ).'" alt="'.esc_attr('View all posts in%s', $category->name ) .'" >'.esc_html($category->name) .'</a>';
       $i++; 
    endforeach;
    endif;
    
    return '<span class="posted-on">Posted <a href="'.esc_url( get_permalink() ).'">' . $posted_on . '</a> ago </span> / <span class="posted-in">' . $output . '</span>';
}
function quake_posted_footer(){
    $comments_num = get_comments_number();
    if( comments_open() ){
        if( $comments_num == 0 ){
            $comments = __('No Comments');
        }elseif( $comments_num > 1 ){
            $comments = $comments_num . __(' Comments');
        }else{
            $comments = __('1 Comment');
        }
        $comments = '<div class="comment"><span class="glyphicon glyphicon-comment" style="top: 6px; font-size:17px;"></span>&nbsp;<a href="'.get_comments_link() .'">'.$comments.'</a></div>';
    }else{
        $comments = __('Comments are closed');
    }
    return '<div class="post-footer-container"><div class="row"><div class="col-xs-12 col-sm-6"> ' . get_the_tag_list('<div class="tags-list"><span class="glyphicon glyphicon-tag" style="top: 6px; font-size:15px;"></span>', '', '</div>') . ' </div><div class="col-xs-12 col-sm-6">' .$comments . '</div></div></div>';
}

function quake_get_attachment( $num = 1 ){
         $output = '';
    if( has_post_thumbnail() && $num == 1 ): 
         $output = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
    else:
            $attachments = get_posts( array(
        'post_type' => 'attachment',
        'posts_per_page' => $num,
        'post_parent' => get_the_ID()
        ) );
        if( $attachments && $num == 1 ):
            foreach( $attachments as $attachment):
                $output = wp_get_attachment_url( $attachment->ID );
                    endforeach;
            elseif ( $attachments && $num > 1 ):
                $output = $attachments;
                endif;
        wp_reset_postdata();
    
        endif;

        return $output;
}

function quake_get_emdedded_media( $type = array() ){
        $content = do_shortcode( apply_filters('the_content', get_the_content() ) );
        $embed = get_media_embedded_in_content($content, $type );
        
    if ( in_array('audio', $type) ):
        $output = str_replace('?visual=true', '?visual=false', $embed[0] );
    else:
    $output = $embed[0];
    endif;
        return $output;
}

function quake_get_bs_slides($attachments){
    
        $output = array();
      $count = count($attachments)-1;
    
      for( $i = 0; $i <= $count;  $i++ ): 
    
          $active = ( $i == 0 ? ' active' : '' );

          $n = ($i == $count ? 0 : $i+1);
          $nextImg = wp_get_attachment_thumb_url( $attachments[$n]->ID );
          $p = ($i == 0 ? $count : $i-1);
          $prevImg = wp_get_attachment_thumb_url( $attachments[$p]->ID );
    
            $output[$i] = array(
                'class'     => $active,
                'url'       => wp_get_attachment_url( $attachments[$i]->ID ),
                'next_img'  => $nextImg,
                'prev_img'  => $prevImg,
                'caption'   => $attachments[$i]->post_excerpt
            );
              
            endfor; 
    return $output;
}
function quake_grab_url(){
    if( ! preg_match('/<a\s[^>]*?href=[\'"](.+?)[\'"]/i', get_the_content(), $links )){
        return false;
    }
    return esc_url_raw( $links[1] );
}
function quake_grab_current_uri(){
    $http = ( isset( $_SERVER["HTTPS"] ) ? 'https://' : 'http://' );
    $referer = $http . $_SERVER["HTTP_HOST"];
    $archive_url = $referer . $_SERVER["REQUEST_URI"];
        
    return $archive_url;
}

/*
==============================
    SINGLE POST CUSTOM FUNCTIONS
==============================
*/
function quake_post_navigation(){
    $nav = '<div class="row">';
    
    $prev = get_previous_post_link( '<div class="post-link-nav"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>%link</div>', '%title' );
    $nav .= '<div class="col-xs-12 col-sm-6">'.$prev.'</div>';
    
    $next = get_next_post_link( '<div class="post-link-nav">%link<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>', '%title' );
    $nav .= '<div class="col-xs-12 col-sm-6 text-right">'.$next.'</div>';
    
    $nav .= '</div>';
    return $nav;
}

function quake_share_this( $content ){
    if( is_single() ){
        $content .= '<div class="quake-shareThis"><h4>Share This</h4>';

        $title = get_the_title();
        $premalink = get_permalink();

        $twitterHandler = ( get_option('twitter_handler') ? '&amp;via=' . esc_attr( get_option('twitter_handler') ) : '' );
        $twitter = 'https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $premalink . $twitterHandler .'';
        $facebook = 'https://www.facebook.com/sharer/sharer.php?u=' . $premalink;
        $google = 'https://plus.google.com/share?url=' . $premalink;


        $content .= '<ul>';
        $content .= '<li><a href="'.$twitter.'" target="_blank" rel="nofollow"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>';
        $content .= '<li><a href="'.$facebook.'" target="_blank" rel="nofollow"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>';
        $content .= '<li><a href="'.$google.'" target="_blank" rel="nofollow"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>';
        $content .= '</ul></div>';

        return $content;
    }else{
        return $content;
    }
}
add_filter( 'the_content',  'quake_share_this');

/*
==============================
    Get Post Navigation
==============================
*/
function quake_get_post_navigation(){
    if( get_comment_pages_count() > 1 && get_option('page_comments') ):
        require( get_template_directory() . '/inc/templates/quake-comments-nav.php' );
    endif;
}
/*
function mailtrap($phpmailer){
    $phpmailer->isSMTP();
    $phpmailer->Host = 'mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'd68a088090e564';
    $phpmailer->Password = '1cbcdf21ff0c98';
}
add_action('phpmailer_init', 'mailtrap');
*/

/*
===============================
    making image resposive
===============================
*/
add_filter('image_send_to_editor', 'wpse_20160112_filter_image_send_to_editor', 11, 8);

function wpse_20160112_filter_image_send_to_editor($html, $id, $caption, $title, $align, $url, $size, $alt) {
    $responsive_content = str_replace('class="', 'class="img-responsive ', $html);

    return $responsive_content;
}