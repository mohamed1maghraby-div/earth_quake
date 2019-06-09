<?php
//quake_theme_check
    function custom_theme_check(){
            
        add_option('quake_theme_check', '');

        register_setting('quake-theme-options', 'quake_theme_check');
    }

    add_action('admin_init', 'custom_theme_check');
    //custom_textarea_html
    function custom_textarea_html(){
            
        add_option('quake_html', '');

        register_setting('theme-options', 'quake_html');
    }

    add_action('admin_init', 'custom_textarea_html');
    //custom_textarea_css
    function custom_textarea_css(){

        add_option('quake_css', '/* Quake Theme Custom Css */');

        register_setting('theme-options', 'quake_css', 'quake_sanitize_custom_css');
    }

    add_action('admin_init', 'custom_textarea_css');

    //custom_textarea_js
    function custom_textarea_js(){

        add_option('quake_js', '/* Quake Theme Custom Js */');

        register_setting('theme-options', 'quake_js');
    }

    add_action('admin_init', 'custom_textarea_js');

    function quake_theme_options_data(){

   $default_options=array(
        'rtl_mode' => '1',
        'Show_Title_of_blog' => 'Earth Quake',
        'main_background' => '1',
        'main_background_source_img' => '',
        'main_color' => '',
        'logo' => '1',
        'logo_source' => 'https://quaketheme.com/img/test-logo-2.png',
        'logo_source_color'=>'',
        'header_style'=>'1',
        'header_background_color'=>'rgba(40,169,255,0.72)',
        'header_background_on' =>'2',
        'header_background_source' => '',
        'the_logo_same_color_of_header'=>'1',
        'submenu_background_color_1'=>'rgba(40,169,255,0.72)',
	   	'submenu_background_color_2' => 'rgba(40,169,255,0.91)',
	   	'Submenu_Submenu_position_left' => '320',
	   	'Submenu_Submenu_position_right' => '-320',
        'submenu_background_bottom'=>'1',
        'submenu_background_source' =>'',
        'the_submenu_same_color_of_header'=>'1',
        'bolg_background_covor_buttom' => '1',
        'bolg_background_covor'=>'https://quaketheme.com/img/Battlefield_4_siege_of_shanghai_hdwallpapers.jpg',
        'the_blog_covor_same_color_of_header'=>'1',
        'parallax_blog_covor' =>'fixed',
        'border_bottom_color' => 'rgba(33,90,206,0.83)',
        'quake_border_of_height' => '1',
        'quake_border_style' => '',
        'quake_width_of_logo' => '80',
        'quake_height_of_logo' => '80',
        'quake_main_manu_ul_li_padding_top' => '28',
        'quake_main_manu_ul_li_padding_bottom' => '20',
        'quake_main_manu_ul_li_margin_top' => '5',
        'quake_main_manu_ul_li_margin_bottom' => '5',
        'quake_main_manu_ul_li_margin_right' => '10',
        'quake_main_manu_ul_li_margin_left' => '10',
        'page1_background_color' => 'rgba(40,169,255,0)',
        'page1_background_on' => '1',
        'page1_background_source' => 'https://quaketheme.com/img/battlefield_HD_wallpapers.jpg',
        'the_page1_same_color_of_header' => '',
        'quake_page1_height' => '340',
        'page1_Parallax' => 'fixed',
        'padding_of_title_of_blog' => '170',
        'padding_right_of_title_of_blog' => '0',
        'padding_left_of_title_of_blog' => '0',
        'page1_h1_text_align' => 'center',
        'page1_h1_color' => '#fff',
        'page1_h1_font_size' => '38',
        'page1_h1_font_weight' => '100',
        'vertical_background_color' => 'rgba(40,169,255,0.72)',
        'widget_background_color' => 'rgba(40,169,255,0.72)',
        'widget_h2_padding_top' => '10',
        'widget_h2_padding_left' => '10',
        'widget_h2_padding_bottom' => '10',
        'widget_h2_font_color' => '#fff',
        'widget_h2_font_size' => '28',
        'widget_h2_font_weight' => '100',
        'widget_h2_width' => '90',
        'widget_a_link_color' => '#fff',
        'widget_a_hover_link_color' => 'rgba(40,169,255,0.72)',
        'widget_P_color' => '#fff',
        'widget_input_color' => 'rgba(40,169,255,0.72)',
        'widget_button_font_color' => '#fff',
        'widget_button_color' => 'rgba(40,169,255,0.72)',
        'widget_input_font_color' => '#fff',
        'widget_input_button_padding_top' => '50',
        'widget_input_button_padding_left' => '100',
        'bolg_background_covor_buttom_color' => 'rgba(40,169,255,0.72)',
        'a_color_of_main_page' => '#fff',
        'a_hover_color_of_main_page' => 'rgba(40,169,255,0.72)',
        'p_color_of_main_page' => 'fff',
        'quake_main_button_color' => 'rgba(40,169,255,0.72)',
        'quake_button_height' => '50',
        'quake_button_width' => '100',
        'quake_button_border' => '1',
        'quake_main_button_border_color' => 'rgba(40,169,255,0.72)',
        'button_load_more_width' => '195',
        'button_load_more_height' => '85',
        'quake_main_button_color_hover' => 'rgba(38,113,242,0.94)',
        'quake_button_border_color_hover' => 'rgba(40,169,255,0.9)',
        'footer_background_color' => 'rgba(40,169,255,0.72)',
        'footer_background_image' => '1',
        'footer_background_image_src' => '',
        'the_footer_covor_same_color_of_header' => '1',
        'parallax_footer_covor' => 'fixed',
        'footer_logo' => '1',
        'footer_logo_source' => 'https://quaketheme.com/img/test-logo-2.png',
        'quake_height_of_footer_logo' => '75',
        'quake_width_of_footer_logo' => '100',
        'logo_footer_padding_top' => '10',
        'logo_footer_padding_bottom' => '10',
        'footer_widget_input_color' => 'rgba(40,169,255,0.72)',
        'footer_widget_input_font_color' => '#ffffff',
        'footer_widget_button_color' => 'rgba(40,169,255,0.72)',
        'footer_widget_button_font_color' => 'rgba(255,255,255,0.69)',
        'footer_widget_input_button_padding_top' => '25',
        'footer_widget_input_button_padding_left' => '50',
        'show_name_of_the_post_in_page1' => '1',
        'show_name_of_the_post_in_single_page' => '2',
        'time_and_category_alignment' => 'center',
        'content_of_post_font_size' => '14',
        'quake_facebook_page_like_w' => '2',
        'quake_facebook_embed_w' => '2',
        'quake_single_post_facebook_w' => '2',
        'quake_single_tweet_w' => '2',
        'quake_twitter_page_embed_w' => '2',
        'quake_youtube_subscribe_w' => '2',
        'shada' => '',
        'circle_color_1' => '#ecab18',
        'circle_color_2' => '#1ad280',
        'image_color_for_circle' => 'rgba(26, 74, 114, 0.6)',
        'full_name_font_size' => '22',
        'full_name_font_weight' => '100',
        'description_font_size' => '12',
        'description_font_weight' => '100',
        'width_of_submenu' => '500',
        'submenu_padding_top' => '10',
        'submenu_padding_left' => '10',
        'submenu_font_color' => '#ffffff',
        'submenu_font_size' => '18',
        'submenu_Font_Weight' => '100',
        'quake_socail_media_box' => '2',
        'quake_facebook_link' => '',
        'quake_twitter_link' => '',
        'quake_youtube_link' => '',
        'quake_gp_link' => '',
        '404_h1' => '404',
        '404_h1_font_size' => '120',
        '404_h3' => 'Not Found',
        '404_h3_font_size' => '24',
        '404_p' => 'The resource requested could not be found on this server!',
        '404_p_font_size' => '14',
        '404_sidebar' => '2',
        'scrollbar_color' => 'rgba(40,140,255,0.92)',
        'scrollbar_background_color' => 'rgba(40,169,255,0.72)',
        'scrollbar_width' => '12',
        'scrollbar_border_radius' => '5',
        'scrollbar_background_position_top' => '50',
        'scrollbar_background_position_right' => '5',
        'scrollbar_background_height' => '85',
        'search_icon_left' => '1',
	   	'quake_main_padding_top_bottom' => '0',
	   	'quake_main_padding_right_left' => '0',
	   	'quake_main_margin_top_bottom' => '0',
	   	'quake_main_margin_right_left' => '0',
	   	'body_p_font' => 'Audiowide',
	   	'body_a_font' => 'Play',
	    'body_h1_font' => 'Libre Baskerville',
	    'body_h2_font' => 'Russo One',
	    'body_h3_font' => 'Chewy',
	   	'fixed_size_of_logo_height' => '60',
	   	'fixed_size_of_logo_width' => '60',
	   	'fixed_logo_padding_top' => '3',
	   	'fixed_menu_padding_top' => '15',
	   	'fixed_search_icon_top' => '52',
	   	'fixed_bars_icon_top' => '-12',
	   	'fixed_menu_height' => '65',
	   	'widget_search_width' => '90',
	   	'footer_link_color' => 'rgba(40,169,255,0.72)',
	   	'footer_button_hover_color' => 'rgba(38,133,242,0.8)',
	   	'show_hide_sidebar_color' => 'rgba(40,169,255,0.72)',
	   	'show_hide_sidebar_padding_top' => '15',
	   	'show_hide_sidebar_padding_left' => '25',
	   	'show_hide_sidebar_color_hover' => 'rgba(38,113,242,0.94)',
	   	'comments_form_color' => 'rgba(40,169,255,0.72)',
	   	'quake_main_margin_right_left_pos_fix' => '100',
       //contant responsive start
        'general_contant_responsive_lg'=>'',
       'general_contant_responsive_md'=>'',
       'general_contant_responsive_sm'=>'',
       'general_contant_responsive_xs'=>'',
        'sidebar_responive_lg'=>'',
       'sidebar_responive_md'=>'',
       'sidebar_responive_sm'=>'',
       'sidebar_responive_xs'=>'',
       //contant responsive end
        'contant_slidebar_rtl_mode'=>'',
        'contant_rtl_mode'=>'',
        'contant_prallex'=>'1',
        'sidebar_headline_background_color'=>''
         );

        add_option('theme_options',$default_options);

        register_setting('theme-options', 'theme_options');
    }

    add_action('admin_init', 'quake_theme_options_data');

    function submenu_page_theme_options(){
        
//create option theme 
    add_submenu_page('earth_quake', 'Quake Theme Options', 'General Style', 'manage_options', 'earth_quake_theme_r', 'quake_theme_options_page_option');

}

    add_action('admin_menu', 'submenu_page_theme_options');

//sanitize custom css
function quake_sanitize_custom_css($input){
    $output = esc_textarea( $input );
    return $output;
}

    function quake_theme_options_page_option(){
        $options=get_option('theme_options');
        $custom_Html = get_option('quake_html');
        $custom_Css = get_option('quake_css');
        $custom_Js = get_option('quake_js');
        ?>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        tablinks[i].className = tablinks[i].className.replace(" backo1", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    evt.currentTarget.className += " backo1";
}


</script>
<div class="container-fluid">
<div class="wrap">
    <?php screen_icon(); ?>
    <form id="save-custom-css-form" method="post" action="options.php" class="general_form"> 
        <?php settings_fields('theme-options'); 
		if(isset($_POST['serial_check_righte'])){ ?>
		<div style="height:200px;">
			<input  type="hidden" name="theme_options[quake_page_check]" value="check"/>
			<?php submit_button('Active theme', 'primary', 'btnSubmit'); ?>
		</div>
		<?php } ?>
            <div class="main_ul_left col-lg-3">           
                <div class="general_main">
                    <ul>
                        <li>
                        <div class="Quake_logo">
                        <div class="" style="background: url(<?php echo get_template_directory_uri() . '/img/admin-logo.png'; ?>); background-repeat: no-repeat; width:100%; height:100%; padding:0; background-position: 49% 30%;"><label style="position: absolute;top: 19%;left: 28%;font-size: 22px;color: #fff;">Quake 1.0.0</label></div>
                        
                        </div>
                        </li>
                        <div class="main_links">
                            <div class="tab">
  <li class="backo"><a class="tablinks" href="#general_section" onclick="openCity(event, 'general_section')" id="defaultOpen" style="padding-right: 217px;">General</a></li>
  <li class="backo"><a class="tablinks" href="#layout_section" onclick="openCity(event, 'layout_section')" style="padding-right: 225px;">Layout</a></li>
  <li class="backo"><a class="tablinks" onclick="openCity(event, 'header_menu_section')" style="padding-right: 233px;">Menu</a></li>
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'top_header_menu_section')" style="padding-right: 155px;">Top Header Menu</a></li>        
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'vertical_menu')" style="padding-right: 182px">Vertical Menu</a></li>
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'blog_cover')" style="padding-right: 200px;">Main Page</a></li>
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'footer')" style="padding-right: 231px;">footer</a></li>      
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'fonts')" style="padding-right: 237px;">fonts</a></li>            
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'page_1')" style="padding-right: 173px;">Top Main Page</a></li>
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'widget')" style="padding-right: 228px;">widget</a></li>
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'single')" style="padding-right: 231px;">single</a></li>
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'social_media')" style="padding-right: 189px;">social media</a></li>
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'profile_widget')" style="padding-right: 184px;">profile widget</a></li>
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'socail_media_box')" style="padding-right: 163px;">social media box</a></li>
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'not_found_page')" style="padding-right: 207px;">404 page</a></li>
    <li class="backo"><a class="tablinks" onclick="openCity(event, 'scrollbar')" style="padding-right: 214px;">scrollbar</a></li>
</div>
                          </div>
                    </ul>
                </div>
            </div>
                    <div class="main_ul_right col-lg-9">
                       <ul>
                         <li>
                  <div id="general_section" class="tabcontent">
                    <?php require get_template_directory() .'/inc/options/general.php'; ?>
                     </div>
                           </li>
                          <li>
                 <div id="layout_section" class="tabcontent">
                     <?php require get_template_directory() .'/inc/options/layout.php'; ?>
                    </div>
                           </li>
                           <li>
    <div id="header_menu_section" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/header_menu_section.php'; ?>
       </div>
                           </li>
                           <li>
    <div id="top_header_menu_section" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/top_header_menu_section.php'; ?>
           </div>
                           </li>
                           <li>
    <div id="vertical_menu" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/vertical_menu_section.php'; ?>
           </div>
                           </li>
                           <li>
    <div id="blog_cover" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/blog_cover.php'; ?>
           </div>
                           </li>
                           <li>
    <div id="footer" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/footer.php'; ?>
           </div>
                           </li>
                           <li>
    <div id="fonts" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/fonts.php'; ?>
           </div>
                           </li>
                           <li>
    <div id="page_1" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/page_1.php'; ?>
           </div>
                           </li>
                           <li>
    <div id="widget" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/widget.php'; ?>
           </div>
                           </li>
                           <li>
    <div id="single" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/single.php'; ?>
           </div>
                           </li>
                           <li>
    <div id="social_media" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/social_media.php'; ?>
           </div>
                           </li>
                           <li>
    <div id="profile_widget" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/profile_widget.php'; ?>
           </div>
                           </li>
                           <li>
    <div id="socail_media_box" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/socail_media_box.php'; ?>
           </div>
                           </li>
                           <li>
    <div id="not_found_page" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/404_option.php'; ?>
           </div>
                           </li>
                           <li>
    <div id="scrollbar" class="tabcontent">
        <?php require get_template_directory() .'/inc/options/scrollbar.php'; ?>
           </div>
                           </li>
                        </ul>
                    </div>

              
          <?php submit_button('Save Changes', 'primary', 'btnSubmit'); ?>
       </form>
     </div>
</div>

<?php  } ?>
