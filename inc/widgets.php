<?php /*
@package quake-theme

======================
    WIDGET CLASS
======================
*/ $options=get_option('theme_options');
class quake_profile_widget extends WP_Widget {
    // setup the widget name, description, etc...
    public function __construct(){
        $widget_ops =array(
            'classname' => 'quake-profile-widget',
            'description' => 'Custom Quake Profile Widget'
        );
        parent::__construct('quake_profile', 'Quake Profile', $widget_ops);
    }
    //back-end display of widget
    public function form( $instance ){
        echo '<p><strong>No options for this widget!</strong><br/>You can control the fields of this widget from <a href="./admin.php?page=earth_quake">this page</a></p>';
    }
    //front-end display of widget
    public function widget( $args, $instance ){
        
        $picture =esc_attr( get_option( 'profile_picture' ) );
        $firstName =esc_attr( get_option( 'first_name' ) );
        $lastName =esc_attr( get_option( 'last_name' ) );
        $fullName = $firstName . ' ' . $lastName;
        $description =esc_attr( get_option( 'user_description' ) );
        $twitter_icon = esc_attr( get_option( 'twitter_handler' ) );
        $facebook_icon = esc_attr( get_option( 'facebook_handler' ) );
        $gplus_icon = esc_attr( get_option( 'gplus_handler' ) );
        
        echo $args['before_widget'];
        ?>
<div class="row">
  
 
    <!-- colored -->
    <div class="ih-item circle colored effect1"><a href="author">
        <div class="spinner"></div>
        <div class="img"><img src="<?php print $picture; ?>" alt="img"></div>
        <div class="info">
          <div class="info-back">
            <h3><?php print $fullName; ?></h3>
            <p><?php print $description; ?></p>
              
          </div>
        </div></a></div>
    <!-- end colored -->
 
  
</div>

    

    <?php
        echo $args['after_widget'];
    }
}
add_action('widgets_init', function(){
    register_widget('quake_profile_widget');
});


// footer-general-information

class quake_footer_general_information extends WP_Widget {
    // setup the widget name, description, etc...
    public function __construct(){
        $widget_ops =array(
            'classname' => 'quake-footer-general-information',
            'description' => 'Custom Quake Footer General Information About Site'
        );
        parent::__construct('quake_footer_general_information', 'Quake Footer General Information', $widget_ops);
    }
    //back-end display of widget
    public function form( $instance ){
        echo '<p><strong>No options for this widget!</strong><br/>You can control the fields of this widget from <a href="./admin.php?page=earth_quake_general_information">this page</a></p>';
    }
    //front-end display of widget
    public function widget( $args, $instance ){
        
        echo $args['before_widget'];
        $quake_general_information =get_option('quake_general_information');
        ?>
         <div class="general_information">
            <p><?php echo $quake_general_information['quake_addess_1']; ?>, <br/>
                <?php echo $quake_general_information['quakw_city_state']; ?>, <br/>
                <?php echo $quake_general_information['quake_country']; ?>. <br/><br/>

                e: <?php echo $quake_general_information['quake_author_email']; ?> <br/>
                p: <?php echo $quake_general_information['quake_phone']; ?> <br/>
                f: <?php echo $quake_general_information['quake_fax']; ?> </p>
             </div>
    <?php
        echo $args['after_widget'];
    }
}
add_action('widgets_init', function(){
    register_widget('quake_footer_general_information');
});

// quake_facebook_page_like
if($options['quake_facebook_page_like_w'] == '1'){ 
class quake_facebook_page_like extends WP_Widget {
    // setup the widget name, description, etc...
    public function __construct(){
        $widget_ops =array(
            'classname' => 'quake-facebook-page-like',
            'description' => 'Custom Quake Facebook Page Like'
        );
        parent::__construct('quake_facebook_page_like', 'Quake Facebook Page Like', $widget_ops);
    }
    //back-end display of widget
    public function form( $instance ){
        $title = ( !empty( $instance['title'] ) ? $instance['title'] : '');
        $like_page_url = ( !empty( $instance['url'] ) ? $instance['url'] : '');
        
        $output  = '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('title')).'">Title:</label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('title')).'" name="'.esc_attr($this->get_field_name('title')).'" value="'.esc_attr( $title ).'"';
        $output .='</p>';
        
        $output .= '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('url')).'">Yor Page URL:</label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('url')).'" name="'.esc_attr($this->get_field_name('url')).'" value="'.esc_attr( $like_page_url ).'"';
        $output .='</p>';
        
        echo $output;
    }
        //update widget
    public function update( $new_instance, $old_instance ){
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : '');
        $instance['url'] = ( !empty( $new_instance['url'] ) ? strip_tags( $new_instance['url'] ) : '');
        
        return $instance;
    }
    //front-end display of widget
    public function widget( $args, $instance ){
        echo $args['before_widget'];
        
        if(!empty($instance['title'])):
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) .$args['after_title'];
        endif;
        
        $like_page_url = $instance['url'];
        
        ?>
         <div class="fb-page" data-href="<?php echo $like_page_url; ?>" data-width="340" data-hide-cover="false" data-show-facepile="true"></div>
    <?php
        echo $args['after_widget'];
    }
}
add_action('widgets_init', function(){
    register_widget('quake_facebook_page_like');
});
}
// quake_youtube_subscribe_button
if($options['quake_youtube_subscribe_w'] == '1'){ 
class quake_youtube_subscribe_button extends WP_Widget {
    // setup the widget name, description, etc...
    public function __construct(){
        $widget_ops =array(
            'classname' => 'quake-youtube-subscribe-button',
            'description' => 'Custom Quake Youtube Subscribe Button'
        );
        parent::__construct('quake_youtube_subscribe_button', 'Quake Youtube Subscribe Button', $widget_ops);
    }
    //back-end display of widget
    public function form( $instance ){
              $title = ( !empty( $instance['title'] ) ? $instance['title'] : '');
        $channel_name = ( !empty( $instance['channel_name'] ) ? $instance['channel_name'] : '');
        
        $output  = '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('title')).'">Title:</label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('title')).'" name="'.esc_attr($this->get_field_name('title')).'" value="'.esc_attr( $title ).'"';
        $output .='</p>';
        
        $output .= '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('channel_name')).'">Yor Channel Name:</label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('channel_name')).'" name="'.esc_attr($this->get_field_name('channel_name')).'" value="'.esc_attr( $channel_name ).'"';
        $output .='</p>';
        
        echo $output;
    }
            //update widget
    public function update( $new_instance, $old_instance ){
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : '');
        $instance['channel_name'] = ( !empty( $new_instance['channel_name'] ) ? strip_tags( $new_instance['channel_name'] ) : '');
        
        return $instance;
    }
    //front-end display of widget
    public function widget( $args, $instance ){
        echo $args['before_widget'];
        if(!empty($instance['title'])):
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) .$args['after_title'];
        endif;
        
        $show_channel_name = $instance['channel_name'];
        
        ?>
 <script src="https://apis.google.com/js/platform.js" async defer></script> <!-- important -->

         <script>
  function onYtEvent(payload) {
    if (payload.eventType == 'subscribe') {
      // Add code to handle subscribe event.
    } else if (payload.eventType == 'unsubscribe') {
      // Add code to handle unsubscribe event.
    }
    if (window.console) { // for debugging only
      window.console.log('YT event: ', payload);
    }
  }
</script>

<div class="g-ytsubscribe" data-channel="<?php echo $show_channel_name; ?>" data-layout="full" data-count="default" data-onytevent="onYtEvent"></div>   
    <?php
        echo $args['after_widget'];
    }
}
add_action('widgets_init', function(){
    register_widget('quake_youtube_subscribe_button');
});
}

// website social media icon

class quake_social_media_icon extends WP_Widget {
    // setup the widget name, description, etc...
    public function __construct(){
        $widget_ops =array(
            'classname' => 'quake social media icon',
            'description' => 'Custom Quake  Social Media Icon'
        );
        parent::__construct('quake_social_media_icon', 'Quake Social Media Icon', $widget_ops);
    }
    //back-end display of widget
    public function form( $instance ){
        echo '<p><strong>No options for this widget!</strong><br/>You can control the fields of this widget from <a href="./admin.php?page=earth_quake">this page</a></p>';
    }
    //front-end display of widget
    public function widget( $args, $instance ){
        
        echo $args['before_widget']; 
        $options=get_option('theme_options');
        ?>
        <div class="">
        <a href="<?php echo $options['quake_facebook_link']; ?>"><img src="http://localhost/earth_quake/wp-content/themes/object-theme/img/facebook.png"/></a>
        <a href="<?php echo $options['quake_gp_link']; ?>"><img src="http://localhost/earth_quake/wp-content/themes/object-theme/img/gp+.png"/></a>
        <a href="<?php echo $options['quake_twitter_link']; ?>"><img src="http://localhost/earth_quake/wp-content/themes/object-theme/img/twitter.png"/></a>
        <a href="<?php echo $options['quake_youtube_link']; ?>"><img src="http://localhost/earth_quake/wp-content/themes/object-theme/img/youtube.png"/></a>
        
            </div>
    <?php
        echo $args['after_widget'];
    }
}
add_action('widgets_init', function(){
    register_widget('quake_social_media_icon');
});


// twitter embed
if($options['quake_twitter_page_embed_w'] == '1'){ 
class quake_twitter_embed extends WP_Widget {
    // setup the widget name, description, etc...
    public function __construct(){
        $widget_ops =array(
            'classname' => 'quake twitter embed',
            'description' => 'Custom Quake Twitter Embed'
        );
        parent::__construct('quake_twitter_embed', 'Quake Twitter Embed', $widget_ops);
    }
    //back-end display of widget
    public function form( $instance ){
        $title = ( !empty( $instance['title'] ) ? $instance['title'] : '');
        $embed_link = ( !empty( $instance['embed_link'] ) ? $instance['embed_link'] : '');
        $width_embed = ( !empty( $instance['width_embed'] ) ? $instance['width_embed'] : '90');
        $height_embed = ( !empty( $instance['height_embed'] ) ? $instance['height_embed'] : '380');
        
        $output  = '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('title')).'">Title:</label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('title')).'" name="'.esc_attr($this->get_field_name('title')).'" value="'.esc_attr( $title ).'"';
        $output .='</p>';
        
        $output .= '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('embed_link')).'">Yor Embed Link:</label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('embed_link')).'" name="'.esc_attr($this->get_field_name('embed_link')).'" value="'.esc_attr( $embed_link ).'"';
        $output .='</p>';
        
        $output .= '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('width_embed')).'">Width In %: </label>';
        $output .= '<input style="width:20%;" type="number" class="widefat" id="'.esc_attr($this->get_field_id('width_embed')).'" name="'.esc_attr($this->get_field_name('width_embed')).'" value="'.esc_attr( $width_embed ).'"';
        $output .='</p>';
        
        $output .= '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('height_embed')).'">Width In PX: </label>';
        $output .= '<input style="width:20%;" type="number" class="widefat" id="'.esc_attr($this->get_field_id('height_embed')).'" name="'.esc_attr($this->get_field_name('height_embed')).'" value="'.esc_attr( $height_embed ).'"';
        $output .='</p>';
        
        echo $output;
    }
    //update widget
    public function update( $new_instance, $old_instance ){
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : '');
        $instance['embed_link'] = ( !empty( $new_instance['embed_link'] ) ? strip_tags( $new_instance['embed_link'] ) : '');
        $instance['width_embed'] = ( !empty( $new_instance['width_embed'] ) ? strip_tags( $new_instance['width_embed'] ) : '');
        $instance['height_embed'] = ( !empty( $new_instance['height_embed'] ) ? strip_tags( $new_instance['height_embed'] ) : '');
        
        return $instance;
    }
    //front-end display of widget
    public function widget( $args, $instance ){
        
        echo $args['before_widget'];
        if(!empty($instance['title'])):
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) .$args['after_title'];
        endif;
        
        $embed_url = $instance['embed_link']; //https://twitter.com/MustafaHosny
        $show_width_embed = $instance['width_embed'];
        $show_height_embed = $instance['height_embed'];
        ?>
        <!-- twitter embed  --> 
<div class="" style="width: <?php echo $show_width_embed; ?>%;">
<a class="twitter-timeline" height="<?php echo $show_height_embed; ?>" href="<?php echo $embed_url; ?>"></a> 
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <?php
        echo $args['after_widget'];
    }
}
add_action('widgets_init', function(){
    register_widget('quake_twitter_embed');
});
}

// a Single Tweet
if($options['quake_single_tweet_w'] == '1'){ 
class quake_single_tweet extends WP_Widget {
    // setup the widget name, description, etc...
    public function __construct(){
        $widget_ops =array(
            'classname' => 'quake single tweet',
            'description' => 'Custom Quake Single Tweet'
        );
        parent::__construct('quake_single_tweet', 'Quake Single Tweet', $widget_ops);
    }
    //back-end display of widget
    public function form( $instance ){
        $title = ( !empty( $instance['title'] ) ? $instance['title'] : '');
        $single_tweet = ( !empty( $instance['single_tweet'] ) ? $instance['single_tweet'] : '');
        $width_tweet = ( !empty( $instance['width_tweet'] ) ? $instance['width_tweet'] : '90');
        
        $output  = '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('title')).'">Title:</label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('title')).'" name="'.esc_attr($this->get_field_name('title')).'" value="'.esc_attr( $title ).'"';
        $output .='</p>';
        
        $output .= '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('single_tweet')).'">URL Of Single Tweet: </label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('single_tweet')).'" name="'.esc_attr($this->get_field_name('single_tweet')).'" value="'.esc_attr( $single_tweet ).'"';
        $output .='</p>';
        
        $output .= '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('width_tweet')).'">Width In %: </label>';
        $output .= '<input style="width:20%;" type="number" class="widefat" id="'.esc_attr($this->get_field_id('width_tweet')).'" name="'.esc_attr($this->get_field_name('width_tweet')).'" value="'.esc_attr( $width_tweet ).'"';
        $output .='</p>';
        
        echo $output;
    }
    //update widget
    public function update( $new_instance, $old_instance ){
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : '');
        $instance['single_tweet'] = ( !empty( $new_instance['single_tweet'] ) ? strip_tags( $new_instance['single_tweet'] ) : '');
        $instance['width_tweet'] = ( !empty( $new_instance['width_tweet'] ) ? strip_tags( $new_instance['width_tweet'] ) : '');
        
        return $instance;
    }
    //front-end display of widget
    public function widget( $args, $instance ){
        
        echo $args['before_widget'];
        
        if(!empty($instance['title'])):
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) .$args['after_title'];
        endif;
        
        $single_tweet_t = $instance['single_tweet']; //https://twitter.com/MustafaHosny/status/842407794234011648
        $width_tweet_t = $instance['width_tweet'];
        ?>
         <!-- a Single Tweet -->  
<div class="" style="width:<?php echo $width_tweet_t; ?>%;">
    <blockquote class="twitter-tweet" data-lang="en">
      <p lang="en" dir="ltr"></p>&mdash;<a href="<?php echo $single_tweet_t; ?>"></a>
    </blockquote>
    </div>
    <?php
        echo $args['after_widget'];
    }
}
add_action('widgets_init', function(){
    register_widget('quake_single_tweet');
});
}

// facebook embed page
if($options['quake_facebook_embed_w'] == '1'){ 
class quake_facebook_embed_page extends WP_Widget {
    // setup the widget name, description, etc...
    public function __construct(){
        $widget_ops =array(
            'classname' => 'quake facebook embed page',
            'description' => 'Custom Quake Facebook Embed Page'
        );
        parent::__construct('quake_facebook_embed_page', 'Quake Facebook Embed Page', $widget_ops);
    }
    //back-end display of widget
    public function form( $instance ){
        $title = ( !empty( $instance['title'] ) ? $instance['title'] : '');
        $embed_page = ( !empty( $instance['embed_page'] ) ? $instance['embed_page'] : '');
        $width_embed = ( !empty( $instance['width_embed'] ) ? $instance['width_embed'] : '90');
        
        $output  = '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('title')).'">Title:</label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('title')).'" name="'.esc_attr($this->get_field_name('title')).'" value="'.esc_attr( $title ).'"';
        $output .='</p>';
        
        $output .= '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('embed_page')).'">URL Of Facebook Page: </label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('embed_page')).'" name="'.esc_attr($this->get_field_name('embed_page')).'" value="'.esc_attr( $embed_page ).'"';
        $output .='</p>';
        
        $output .= '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('width_embed')).'">Width In %: </label>';
        $output .= '<input style="width:20%;" type="number" class="widefat" id="'.esc_attr($this->get_field_id('width_embed')).'" name="'.esc_attr($this->get_field_name('width_embed')).'" value="'.esc_attr( $width_embed ).'"';
        $output .='</p>';
        
        echo $output;
    }
    //update widget
    public function update( $new_instance, $old_instance ){
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : '');
        $instance['embed_page'] = ( !empty( $new_instance['embed_page'] ) ? strip_tags( $new_instance['embed_page'] ) : '');
        $instance['width_embed'] = ( !empty( $new_instance['width_embed'] ) ? strip_tags( $new_instance['width_embed'] ) : '');
        
        return $instance;
    }
    //front-end display of widget
    public function widget( $args, $instance ){
        
        echo $args['before_widget'];
        if(!empty($instance['title'])):
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) .$args['after_title'];
        endif;
        
        $embed_page_f = $instance['embed_page']; //https://www.facebook.com/hazal-kaya-212449908814728/
        $width_embed_f = $instance['width_embed'];
        ?>
                    <!-- facebook embed page  -->
<div class="fb-page" data-href="<?php echo $embed_page_f; ?>" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" style="width:<?php echo $width_embed_f; ?>%;">
    <blockquote cite="<?php echo $embed_page_f; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $embed_page_f; ?>"></a>
    </blockquote>
</div>
    <?php
        echo $args['after_widget'];
    }
}
add_action('widgets_init', function(){
    register_widget('quake_facebook_embed_page');
});
}

// a Single post facebook
if($options['quake_single_post_facebook_w'] == '1'){ 
class quake_single_post_facebook extends WP_Widget {
    // setup the widget name, description, etc...
    public function __construct(){
        $widget_ops =array(
            'classname' => 'quake facebook embed page',
            'description' => 'Custom Quake Single Post Facebook'
        );
        parent::__construct('quake_single_post_facebook', 'Quake Single Post Facebook', $widget_ops);
    }
    //back-end display of widget
    public function form( $instance ){
        $title = ( !empty( $instance['title'] ) ? $instance['title'] : '');
        $embed_page = ( !empty( $instance['embed_page'] ) ? $instance['embed_page'] : '');
        $width_embed = ( !empty( $instance['width_embed'] ) ? $instance['width_embed'] : '90');
        
        $output  = '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('title')).'">Title:</label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('title')).'" name="'.esc_attr($this->get_field_name('title')).'" value="'.esc_attr( $title ).'"';
        $output .='</p>';
        
        $output .= '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('embed_page')).'">URL Of Facebook Page: </label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('embed_page')).'" name="'.esc_attr($this->get_field_name('embed_page')).'" value="'.esc_attr( $embed_page ).'"';
        $output .='</p>';
        
        $output .= '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('width_embed')).'">Width In %: </label>';
        $output .= '<input style="width:20%;" type="number" class="widefat" id="'.esc_attr($this->get_field_id('width_embed')).'" name="'.esc_attr($this->get_field_name('width_embed')).'" value="'.esc_attr( $width_embed ).'"';
        $output .='</p>';
        
        echo $output;
    }
    //update widget
    public function update( $new_instance, $old_instance ){
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : '');
        $instance['embed_page'] = ( !empty( $new_instance['embed_page'] ) ? strip_tags( $new_instance['embed_page'] ) : '');
        $instance['width_embed'] = ( !empty( $new_instance['width_embed'] ) ? strip_tags( $new_instance['width_embed'] ) : '');
        
        return $instance;
    }
    //front-end display of widget
    public function widget( $args, $instance ){
        
        echo $args['before_widget'];
        if(!empty($instance['title'])):
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) .$args['after_title'];
        endif;
        
        $single_poste_e = $instance['embed_page']; //https://www.facebook.com/hazal-kaya-212449908814728/
        $width_single_poste_e = $instance['width_embed'];
        ?>
                    <!-- facebook embed page  -->
    <div class="fb-post" data-href="https://www.facebook.com/20531316728/posts/10154009990506729/" data-width="200" data-show-text="true"><blockquote cite="https://www.facebook.com/20531316728/posts/10154009990506729/" class="fb-xfbml-parse-ignore">تم نشره بواسطة ‏‎<a href="https://www.facebook.com/facebook/">Facebook</a>‎‏ في&nbsp;<a href="https://www.facebook.com/20531316728/posts/10154009990506729/">27 أغسطس، 2015</a></blockquote></div>
    <?php
        echo $args['after_widget'];
    }
}
add_action('widgets_init', function(){
    register_widget('quake_single_post_facebook');
});
}

// Contact Form widgets

class quake_contact_form_widgets extends WP_Widget {
    // setup the widget name, description, etc...
    public function __construct(){
        $widget_ops =array(
            'classname' => 'quake-contact-form-widgets',
            'description' => 'Custom Quake Contact form'
        );
        parent::__construct('quake_contact_form_widgets', 'Quake Contact Form', $widget_ops);
    }
    //back-end display of widget
    public function form( $instance ){
        $title = ( !empty( $instance['title'] ) ? $instance['title'] : 'CONNECT WITH US');
        
        $output  = '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('title')).'">Title:</label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('title')).'" name="'.esc_attr($this->get_field_name('title')).'" value="'.esc_attr( $title ).'"';
        $output .='</p>';
        
        echo $output;
    }
        //update widget
    public function update( $new_instance, $old_instance ){
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : '');
        
        return $instance;
    }
    //front-end display of widget
    public function widget( $args, $instance ){
        
        echo $args['before_widget'];
        if(!empty($instance['title'])):
        
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) .$args['after_title'];
        
            endif;
        ?>
         
<form id="quakeContactForm" class="quake-contact-form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
    <div class="form-group">
        <input type="text" class="form-control quake-form-control" placeholder="Your Name" id="name" name="name" />
        <small class="text-danger form-control-msg">Your Name is Required</small>
     </div>
    
    <div class="form-group">
        <input type="email" class="form-control quake-form-control" placeholder="Your Email" id="email" name="email" />
        <small class="text-danger form-control-msg">Your Email is Required</small>
     </div>
    
    <div class="form-group">
        <textarea name="message" id="message" class="form-control quake-form-control" placeholder="Your Message"></textarea>
        <small class="text-danger form-control-msg">A Message is Required</small>
     </div>
    
    <div class="text-center">
    <button type="submit" class="btn btn-default btn-lg btn-quake-form">Submit</button>
    <small class="text-info form-control-msg js-form-submission">Submission in process, please wait..</small>
    <small class="text-success form-control-msg js-form-success">Message Successfully Submitted, thank you!</small>
    <small class="text-danger form-control-msg js-form-error">There was a problem with the Contact Form, please try again!</small>
        </div>
</form>

    <?php
        echo $args['after_widget'];
    }
}
add_action('widgets_init', function(){
    register_widget('quake_contact_form_widgets');
});


// email box widgets

class quake_email_box_widgets extends WP_Widget {
    // setup the widget name, description, etc...
    public function __construct(){
        $widget_ops =array(
            'classname' => 'quake-email-box-widgets',
            'description' => 'Custom Quake Email Box'
        );
        parent::__construct('quake_email_box_widgets', 'Quake Email Box', $widget_ops);
    }
    //back-end display of widget
    public function form( $instance ){
        $title = ( !empty( $instance['title'] ) ? $instance['title'] : 'Subscribe Us');
        
        $output  = '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('title')).'">Title:</label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('title')).'" name="'.esc_attr($this->get_field_name('title')).'" value="'.esc_attr( $title ).'"';
        $output .='</p>';
        
        echo $output;
    }
        //update widget
    public function update( $new_instance, $old_instance ){
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : '');
        
        return $instance;
    }
    //front-end display of widget
    public function widget( $args, $instance ){
        
        echo $args['before_widget'];
        if(!empty($instance['title'])):
        
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) .$args['after_title'];
        
            endif;
        ?>
         
                    <form id="quakeEmailForm" class="quake-contact-form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

    <div class="form-group">
        <input type="email" class="form-control quake-form-control" placeholder="Your Email" id="emailList" name="email" />
        <small class="text-danger form-control-msg">Your Email is Required</small>
     </div>
    
    <div class="text-center">
    <button type="submit" class="btn btn-default btn-lg btn-quake-form">Submit</button>
    <small class="text-info form-control-msg js-form-submission">Submission in process, please wait..</small>
    <small class="text-success form-control-msg js-form-success">Message Successfully Submitted, thank you!</small>
    <small class="text-danger form-control-msg js-form-error">There was a problem with the Contact Form, please try again!</small>
        </div>
</form>

    <?php
        echo $args['after_widget'];
    }
}
add_action('widgets_init', function(){
    register_widget('quake_email_box_widgets');
});

/*
Edit default wordpress widgets size of tags  !important
*/
function quake_tage_cloud_font_change ( $args ){
    $args['smallest'] = 9;
    $args['largest'] = 9;
    return $args;
}
add_filter('widget_tag_cloud_args', 'quake_tage_cloud_font_change');

/*
save posts views
*/
function quake_save_post_views( $postID ){
    $metaKey = 'quake_post_views';
    $views = get_post_meta( $postID, $metaKey, true);
    
    $count = ( empty($views) ? 0 : $views );
    $count++;
    
    update_post_meta($postID, $metaKey, $count);
    /*echo '<h1>'.$views.'</h1>';*/
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
/* popular posts widget */
class quake_popular_posts_widget extends wp_widget{
    // setup the widget name, description, etc...
    public function __construct(){
        $widget_ops =array(
            'classname' => 'quake-popular-posts-widget',
            'description' => 'Popular Posts Widget'
        );
        parent::__construct('quake_popular_posts', 'Quake Popular Posts', $widget_ops);
        }
    //back-end display of widget
    public function form( $instance ){
        $title = ( !empty( $instance['title'] ) ? $instance['title'] : 'Popular Posts');
        $tot = ( !empty( $instance['tot'] ) ? absint( $instance['tot'] ) : 4 );
        $type = ( !empty( $instance['type'] ) ? absint( $instance['type'] ) : 0 );
        
        $output  = '<p>';
        $output .= '<label for="'.esc_attr($this->get_field_id('title')).'">Title:</label>';
        $output .= '<input type="text" class="widefat" id="'.esc_attr($this->get_field_id('title')).'" name="'.esc_attr($this->get_field_name('title')).'" value="'.esc_attr( $title ).'"';
        $output .='</p>';
        
        $output .= '<p>';
        $output .= '<label for="'.esc_attr( $this->get_field_id('tot') ).'">Number of Posts:</label>';
        $output .= '<input type="number" class="widefat" id="'.esc_attr($this->get_field_id('tot')).'" name="'.esc_attr( $this->get_field_name('tot') ) . '" value="' . esc_attr( $tot ) . '"';
        $output .='</p>';
        
        if ( $instance['type'] == 0 ) $selected = ' selected="selected"';
        elseif ( $instance['type'] == 1 ) $selected_1 = ' selected="selected"';
        elseif ( $instance['type'] == 2 ) $selected_2 = ' selected="selected"';
        elseif ( $instance['type'] == 3 ) $selected_2 = ' selected="selected"';
        $output .= '<p>';
        $output .= '<label for="'.esc_attr( $this->get_field_id('type') ).'">Type of Posts: </label>';
        $output .= '<select name="'.esc_attr( $this->get_field_name('type') ).'">';
        $output .= '<option value="0" '.$selected.'>Per Year</option>';
        $output .= '<option value="1" '.$selected_1.'>Per Month</option>';
        $output .= '<option value="2" '.$selected_2.'>Per Week</option>';
        $output .= '<option value="3" '.$selected_3.'>Per Day</option>';
        $output .= '</select>';
        $output .= '</p>';
        
        echo $output;
        }
    //update widget
    public function update( $new_instance, $old_instance ){
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : '');
        $instance['tot'] = ( !empty( $new_instance['tot']) ? absint( strip_tags( $new_instance['tot'] ) ) : 0 );
        $instance['type'] = ( !empty( $new_instance['type']) ? absint( strip_tags( $new_instance['type'] ) ) : 0 );
        
        return $instance;
    }
    //front-end display of widget
    public function widget( $args, $instance ){
        
        $tot = absint( $instance['tot'] );
        
        switch ($instance['type']) {
    case 0:
        $year = date( 'Y' );
        break;
    case 1:
        $month = date( 'm' );
        break;
    case 2:
        $week = date( 'W' );
        break;
    case 3:
        $day = date( 'd' );
        break;

}
        $posts_args = array( 
            'post_type'         => 'post',
            'posts_per_page'    => $tot,
            'meta_key'          => 'quake_post_views',
            'orderby'           => 'meta_value_num',
            'order'             => 'DESC',
            'date_query' => array(
        array(
            'year' => $year,
            'month' => $month,
            'week' => $week,
            'day' => $day,
        ),
    ),
                           );
        $posts_query = new WP_Query( $posts_args );
        
        echo $args['before_widget'];
        if(!empty($instance['title'])):
        
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) .$args['after_title'];
        
            endif;
        if( $posts_query->have_posts() ):
            //echo '<ul>';

                while($posts_query->have_posts()) :$posts_query->the_post();
                    echo '<div class="media">';
                  /*  echo '<div class="media-left"><img class="media-object" src="' . get_template_directory_uri() . '/img/post-' .( get_post_format() ? get_post_format() : 'standard') . '.png" alt="' . get_the_title() . '"/></div>';*/
                    
        $get_the_widgets_thumpnail = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
        if(!empty($get_the_widgets_thumpnail)){
            echo '<div class="img_most_popular_posts col-lg-3">
                        <img class="img-responsive img_wid" src="'.$get_the_widgets_thumpnail.'" />
                    </div>';
        }else{
            echo '<div class="col-lg-3"><img class="media-object img-responsive" src="' . get_template_directory_uri() . '/img/post-' .( get_post_format() ? get_post_format() : 'standard') . '.png" alt="' . get_the_title() . '"/></div>';
        }
                     
                    echo '<div class="body_most_popular_posts col-lg-9">';
                    echo '<a href="'.get_the_permalink().'" title="' . get_the_title() . '">' . get_the_title() . '</a><div class="clearfix"></div>';
                    echo '<div class="sup_body_most_popular_posts"><p>' . get_the_time('d M , Y') . ' by </p><a href="' . get_the_author() . '">' . get_the_author() . '</a></div>';
                    echo '';
                    /*echo '<div class="row"><div class="col-xs-12">' . quake_posted_footer(true) . ' </div></div>';*/
                    echo '</div>';
                    echo '</div>';
                endwhile;

            //echo'</ul>';
        
        endif;
        
        wp_reset_postdata();
        
        echo $args['after_widget'];
    }
    }
    add_action('widgets_init', function(){
        register_widget('quake_popular_posts_widget');
    });


function quake_list_categories_output_change( $links ) {
    $links = str_replace('</a> (', '</a> <span>', $links);
    $links = str_replace(')', '</span>', $links);
    return $links;
}
add_filter('wp_list_categories', 'quake_list_categories_output_change');