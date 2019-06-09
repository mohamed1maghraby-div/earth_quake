<?php /*
@package quake-theme
*/
?>
<div id="comments" class="comments-area">
    <?php
        if( have_comments() ):
        //we have comments
    ?>
    <h2 class="comment-title">
        <?php
            printf(
                esc_html( _nx('One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'earthquake') ), 
                number_format_i18n( get_comments_number() ),
                '<span>' . get_the_title() . '</span>'
            );
        ?>
    </h2>
    
       
    
    <?php quake_get_post_navigation(); ?>
    
<ul class="comment-list">
    <?php function my_comments_callback( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment; ?>
           <div class="clearfix"></div>
    <li class="comment even thread-odd thread-alt depth-1 col-lg-12 col-md-12 col-sm-12 col-xs-12" id="li-comment-<?php comment_ID(); ?>">
<article id="comment-<?php comment_ID(); ?>" class="comment-wrap clearfix">

    <footer class="comment-meta">

        <div class="comment-author vcard col-lg-5 col-md-5">
			<div class="comment_author_img" style="overflow: hidden;">
              <?php echo get_avatar($comment,$size='64',$default='<path_to_url>' ); ?></div>
            <div class="quake_main_name">
            <b ><a href="#<?php comment_author(); ?>"><?php comment_author(); ?></a></b>
            <span class="says">says:</span>
            </div>
        </div>
        
<!-- .comment-author -->

    <div class="comment-content clearfix">
        
        <p><?php comment_text(); ?></p>

    </div>
		        <div class="comment-metadata col-lg-4 col-md-4">
            <a href='<?php the_permalink(); ?>#comment-<?php comment_ID(); ?>'>
            <time datetime="<?php echo comment_date(); ?>"><?php echo comment_date(); ?></time></a>
        </div>
        <div class="clearfix"></div>
    </footer>
<!-- .comment-meta -->
    <!-- .comment-content -->
    <div class="reply">
                <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div>
                                        <div class="clear"></div>

                                    </article>

                                </li>
                                <?php
                            }

 wp_list_comments( array( 'callback' => 'my_comments_callback', 'style' => 'ol' ) ); ?>
        </ul><!-- .commentlist -->
    <div class="clearfix"></div>
    <?php quake_get_post_navigation(); ?>
    
    <?php
        if( !comments_open() && get_comments_number() ):
    ?>
    <p class="no-comments"><?php esc_html_e('comments are closed.', 'default'); ?></p>
    <?php
        endif;
    ?>
    <?php
        endif;
    ?>

    
    


    <?php 
    $fields = array(
        'author' => '<div class="comment_entry_data"><label for="author">' . __('Name', 'domainreference') . '</label> <span class="required">*</span><br/><input id="author" name="author" type="text" class="" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" /></div>',
        
        'email' => '<div class="comment_entry_data"><label for="email">' . __('Email', 'domainreference') . '</label> <span class="required">*</span><br/><input id="email" name="email" type="text" class="" value="' . esc_attr( $commenter['comment_author_email'] ) . '" required="required" /></div>',
        
        'url' => '<div class="comment_entry_data last-field"><label for="url">' . __('Website', 'domainreference') . '</label><br/><input id="url" name="url" type="text" class="" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div>'
    );
    $args = array(
        'class_submit' => 'quake_comment_sub_bottom button-container',
        'label_submit' => __('Submit Comment'), //name of the buttom
        'comment_field' => 
        '<div class="comment_entry_data"><label for="comment">' . _x('Comment', 'noun') . ' With :</label><div class="comment_facebook_icon"></div><textarea id="comment" name="comment" class="" rows="4" required="required" /></textarea></div>',
        
        'fields' => apply_filters('comment_form_default_fields', $fields )
    );
    
    comment_form( $args ); 

    ?>
</div>
<div class="clearfix"></div>
