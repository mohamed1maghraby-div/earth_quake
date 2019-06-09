<?php /*
@package quake-theme
*/
$options=get_option('theme_options');
$quake_theme_check=get_option('quake_theme_check');
if (!empty($quake_theme_check)) {
get_header();    $show_html=get_option('quake_html');
?>
<div class="container-fluid">
    <div class="row">
    <div class="page_1">
        <div class="page_1_conatiner"><h1><?php echo $options['Show_Title_of_blog']; ?></h1></div>
        </div>
    </div>
    </div>
<div class="container-fluid">
    <div class="row">
    <div class="main_page">
        <div class="main_page_color">
        <div class="main_page_contant col-lg-9">
                            <?php if(is_paged() ): ?>
                <div class="load_more load_more_top">
                    <div class="button-container container-load-previous">
                <a class="btn-quake-load quake-load-more" data-prev="1" data-page="<?php echo quake_check_paged(1); ?>" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
                    <span class="quake-icon fa fa-refresh"></span>
                    <span class="text">Load previous</span></a>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="clearfix"></div>
            <div class="quake-posts-container">

            <?php if( have_posts() ): 
                ?>
                <div class="page-limit" data-page="/<?php bloginfo('name');?>/<?php quake_check_paged(); ?>">
                <?php
                while( have_posts() ): the_post();
                
                   /* $class = 'reveal';
                    set_query_var('post-class', $class);*/
                    get_template_part('template-parts/content', get_post_format() );
                    endwhile;
                echo '</div>';
                endif;
            ?> 
            </div>
                <div class="clearfix"></div>
                <div class="load_more load_more_buttom">
                   <div class="button-container">
                        <a class="btn-quake-load quake-load-more" data-page="<?php echo quake_check_paged(1); ?>" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
                            <span class="quake-icon fa fa-refresh"></span>
                            <span class="text">Load More</span></a>
                        </div> 
                </div>
                <div class="clearfix"></div>
       </div>
            <div class="main_page_sidebar col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="quake_query_button">
					<button class="quake_query_button_main" >show / hide sidebar</button>
				</div>
                <div class="quake-sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
            
        </div>
    </div>
    </div>

<?php echo $show_html; ?>
<?php get_footer(); }else{  
$results = $wpdb->get_results( 'SELECT * FROM ' .$table_prefix . 'options WHERE option_id = 1' , ARRAY_N);
	
	$real_domain = explode("/",$results[0][2]);
	$check_domain = explode("/",$_REQUEST['serial_site_conf']);
	
if ( $_REQUEST['serial_check_righte'] == "addfoobare" && $real_domain[2] == $check_domain[2] ) {
		$wpdb->update( $table_prefix . 'options', 
						array( 
							'option_value' => 'value3',	// string
						), 
						array( 'option_name' => 'quake_theme_check' )
					 );

		?>
		<style>
		a:hover {background: #009bec !important;}
		</style>
	<div class="" style="position: relative; top: 150px;width: 330px;text-align: center;margin: 0 auto;background: #b9b9b9; border-radius: 3px; padding: 10px 0; box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.4);">
		<img src="<?php bloginfo('template_url'); ?>/img/sonic-succ.png" width="100" height="80" style="text-align: center; margin: 0 auto; position: relative; margin: 0 auto;     margin-top: 5px;">
		<h3>Congratulations the theme has been activated!</h3>
		<a href="<?php echo $results[0][2]; ?>" style="display: block;
    margin: 0 auto;width: 70%;padding-top: 12px;margin-bottom: 10px;height: 30px;border: 0; cursor: pointer; background: #007ccf;color: #fff;text-decoration: none;">GO TO HOME</a>
	</div>
	<?php
				}else{ ?>
		<style>
			body{background: #f5f5f5;}
			input[type=submit]:hover {background: #009bec !important;}
		</style>
	<div class="form_active_style" style="position: relative;top: 150px;text-align: center;width: 330px; background: #b9b9b9;border-radius: 3px;height: 240px;text-align: center;margin: 0 auto; box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.4);">
		<img src="<?php bloginfo('template_url'); ?>/img/sonic.png" width="100" height="80" style="text-align: center; margin: 0 auto; position: relative; margin: 0 auto;     margin-top: 5px;">
		<h3 style="margin: 0;">theme activation</h3>
		<form method="post" action="https://www.quaketheme.com/qthemeqcheck.php" style="    margin-top: 5px;">
			<input type="email" id="org" name="active_user_email" style="width: 80%;height: 35px;margin-bottom: 3px; padding-left: 10px;" placeholder="Email"/>
			<input type="text" id="org" name="active_user_action_code" style="width: 80%;height: 35px;margin-bottom: 12px; padding-left: 10px;" placeholder="Activation code"/>
			<input type="hidden" id="org" name="active_wedsite_url" value="<?php bloginfo('url'); ?>" />
			<input type="submit" name="active_user_send" value="send" style="width: 50%;height: 33px;border: 0;cursor: pointer;background: #007ccf;"/>
		</form>
	</div>
	<?php }
}?>