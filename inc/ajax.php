<?php /*
        @package earth_quake
        ==============================
                AJAX FUNCTION
        ==============================
        */ 
add_action('wp_ajax_nopriv_quake_load_more', 'quake_load_more');
add_action('wp_ajax_quake_load_more', 'quake_load_more');

add_action('wp_ajax_nopriv_quake_save_user_contact_form', 'quake_save_contact');
add_action('wp_ajax_quake_save_user_contact_form', 'quake_save_contact');

add_action('wp_ajax_nopriv_quake_save_user_email_form', 'quake_save_email_list');
add_action('wp_ajax_quake_save_user_email_form', 'quake_save_email_list');

 function quake_load_more(){
     
     $paged = $_POST["page"]+1;
     $prev = $_POST["prev"];
     $archive = $_POST["archive"];
     $search = $_POST['search'];
      
     if( $prev == 1 && $_POST["page"] != 1 ){
         $paged = $_POST["page"]-1;
     }
     
     $args = array(
        'post_type' => 'post',
         'post_status' => 'publish',
         'paged' =>  $paged,
         's' => $search,
         'year'  => $value,
			'month' => $value_2,
			'day'   => $value_3,
     );
     
     if( $archive != '0' ){
         
         $archVal = explode( '/', $archive );
         $flipped = array_flip($archVal);
         
         switch (isset( $flipped )){
                 
             case $flipped["category"] :
                 $type = "category_name";
                 $key = "category";
                 
                 break;
             case $flipped["tag"] :
                 $type = "tag";
                 $key = $type;
                 
                 break;
             case $flipped["author"] :
                 $type = "author";
                 $key = $type;
                 
                 break;
            case $flipped["2017"] :
                 $type = "earth_quake";
                 $key = $type;
                 $currKey = array_keys( $archVal, $key );
                 $nectKey_2 = $currKey[0]+2;
                 $nectKey_3 = $currKey[0]+3;
                 
                 $value_2 = $archVal[ $nectKey_2 ];
                 $value_3 = $archVal[ $nectKey_3 ];
                 
                 $args["month"] = $value_2;
                 $args["day"] = $value_3;
                 
                 break;
                 
         }
         
         $currKey = array_keys( $archVal, $key );
         $nectKey = $currKey[0]+1;
         $value = $archVal[ $nectKey ];
         $args["year"] = $value;
         $args[ $type ] = $value; 
         
         //check page trail and remove "page" value
         if( isset($flipped["page"]) ){
             
             $pageVal = explode( 'page', $archive );
             $page_trail = $pageVal[0];
         }else{
            $page_trail = $archive; 
         }
         
         /*
         $type = ( $archVal[2] == "category" ? "category_name" : $archVal[2] );
         $args[ $type ] = $archVal[3];
         $page_trail = '/' .$archVal[2] . '/' . $archVal[3] . '/';
         */
          
     }else{
            $main_url = get_option('siteurl'); 
            $salsh_url = '/';
            /*settings_fields('siteurl');*/
		    $page_trail = $main_url .= $salsh_url;
         if(!empty($search)){
            $full_search_url = '/?s=' . $search;}
     }
     $query = new WP_Query( $args );
     
     if( $query->have_posts() ):
    echo '<div class="page-limit" data-page="'. $page_trail . 'page/' . $paged . $full_search_url .'">';
         
        while( $query->have_posts() ): $query->the_post();
            get_template_part('template-parts/content', get_post_format() );
            endwhile;
     echo '</div>';
     
     /*else:
     echo 0;*/
        endif;
     
     wp_reset_postdata();
     
     die();
 }
function quake_check_paged( $num= null ){
    $output='';
    if( is_paged() ){$output= 'page/' .get_query_var('paged');}
    if($num == 1){
        $paged = ( get_query_var('paged') == 0 ? 1 : 'page/'.get_query_var('paged')/*.'?s=medo'*/ );
        return $paged;
    }else{
        return $output;
    }
}
function quake_save_contact(){
    $title = wp_strip_all_tags($_POST["name"]);
    $email = wp_strip_all_tags($_POST["email"]);
    $message = wp_strip_all_tags($_POST["message"]);
    
    $args =array(
        'post_title' => $title,
        'post_content' => $message,
        'post_author' => 1,
        'post_status' => 'publish',
        'post_type' => 'quake-contact',
        'meta_input' => array(
                '_contact_email_value_key' => $email
        )
    );
    
    $postID = wp_insert_post( $args );
    
    if($postID !== 0){
        $to = get_bloginfo( 'admin_email' );
        $subject = 'Quake Contact Form - '.$title;
        
        $headers[] = 'From: '.get_bloginfo('name').' <'.$to.'>';
        $headers[] = 'Reply-to: '.$title.' <'.$email.'>';
        $headers[] = 'Content-Type: text/html: charset=UTF-8';
        
        wp_mail($to, $subject, $message, $headers);
        
        echo $postID;
    }else{
        echo 0;
    }
    
    die();
}



function quake_save_email_list(){
    $email_list = wp_strip_all_tags($_POST["email"]);

    
    $args =array(
        'post_title' => '',
        'post_content' => '',
        'post_author' => 1,
        'post_status' => 'publish',
        'post_type' => 'quake-email',
        'meta_input' => array(
                '_contact_email_list_value_key' => $email_list
        )
    );
    
    $postID = wp_insert_post( $args );
    
    if($postID !== 0){
        $to = get_bloginfo( 'admin_email' );
        $subject = 'Quake Contact Form - '.$title;
        
        $headers[] = 'From: '.get_bloginfo('name').' <'.$to.'>';
        $headers[] = 'Reply-to: '.$title.' <'.$email.'>';
        $headers[] = 'Content-Type: text/html: charset=UTF-8';
        
        wp_mail($to, $subject, $headers);
        
        echo $postID;
    }else{
        echo 0;
    }
    
    die();
}