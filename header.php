<?php /*
        this is the template for the header
        
        @earth_quake
        */ 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
      <head><?php $options=get_option('theme_options'); $show_js=get_option('quake_js'); $show_css=get_option('quake_css');?>
              <title><?php bloginfo('name'); wp_title(); ?></title>
          <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- icon-->
  <link rel="icon" href="<?php echo $options['favicon']; ?>" type="image/x-icon" />
          
    <link rel="profile" href="http://gmpg.org/xfn/11">
          <?php if( is_singular() && pings_open( get_queried_object() )): ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"> 
          <?php endif; ?>
          <?php wp_head(); ?>

      
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
          <style><?php echo $show_css; ?></style>
          <script><?php echo $show_js; ?></script>
		  
          <style>
.navbar-fixed {width: <?php $margin_right_left_pos_fix = 100 - ($options['quake_main_margin_right_left'] * 2); echo $margin_right_left_pos_fix; ?>%;}
.main_page_color {background-color: <?php echo $options['bolg_background_covor_buttom_color']; ?>; }
.main_page {background: url(<?php echo $options['bolg_background_covor']; ?>) repeat <?php echo $options['parallax_blog_covor']; ?> 100%;}
              
.main_manu ul li a{padding:<?php echo $options['quake_main_manu_ul_li_padding_top']; ?>px <?php echo $options['quake_main_manu_ul_li_padding_bottom']; ?>px;}
     
.main_manu ul li a {font-size: <?php echo $options['submenu_font_size']; ?>px; font-weight: <?php echo $options['submenu_Font_Weight']; ?>; color: <?php echo $options['submenu_font_color']; ?>;}
.main_manu li ul li a {padding: <?php echo $options['submenu_padding_top']; ?>px <?php echo $options['submenu_padding_left']; ?>px;}
			  
			  
              /*page_1*/
.page_1 {background: url(<?php echo $options['page1_background_source']; ?>) repeat <?php echo $options['page1_Parallax']; ?> ; background-size: cover;}
.page_1_conatiner {height: <?php echo $options['quake_page1_height']; ?>px; margin-top: -20px; background-color: <?php echo $options['page1_background_color']; ?>;}
.page_1_conatiner h1 {padding-top: <?php echo $options['padding_of_title_of_blog']; ?>px; padding-right: <?php echo $options['padding_right_of_title_of_blog']; ?>px; padding-left: <?php echo $options['padding_left_of_title_of_blog']; ?>px; text-align: <?php echo $options['page1_h1_text_align']; ?>; color: <?php echo $options['page1_h1_color']; ?>; font-size: <?php echo $options['page1_h1_font_size']; ?>px;     font-weight: <?php echo $options['page1_h1_font_weight']; ?>;}
              
.sidenav {background-color: <?php echo $options['vertical_background_color']; ?>;}
.main_page_sidebar h2 {background-color: <?php echo $options['widget_background_color']; ?>; padding: <?php echo $options['widget_h2_padding_top']; ?>px 0 <?php echo $options['widget_h2_padding_bottom']; ?>px <?php echo $options['widget_h2_padding_left']; ?>px; font-size: <?php echo $options['widget_h2_font_size']; ?>px; width: <?php echo $options['widget_h2_width']; ?>%; font-weight: <?php echo $options['widget_h2_font_weight']; ?>; color: <?php echo $options['widget_h2_font_color']; ?>;}

.quake-sidebar{color: <?php echo $options['widget_P_color']; ?>;}
              /* calender style*/
.widget_calendar caption {color: <?php echo $options['widget_h2_font_color']; ?>;     background: <?php echo $options['widget_background_color']; ?>;border-bottom: 1px solid <?php echo $options['widget_background_color']; ?>;}
#calendar_wrap {border: 1px solid <?php echo $options['widget_background_color']; ?>;border-radius: 4px; width: <?php echo $options['widget_h2_width']; ?>%;}
.widget_calendar #today {background: <?php echo $options['widget_background_color']; ?>;}
#calendar_wrap tbody td:hover {background: <?php echo $options['widget_a_hover_link_color']; ?>;}
              /* end calender style*/
.main_page_sidebar a {color: <?php echo $options['widget_a_link_color']; ?>; text-decoration: underline; margin-left: 4px;}
.main_page_sidebar a:hover {color: <?php echo $options['widget_a_hover_link_color']; ?>; text-decoration: none;}
.quake-widget .search_form_resoule input[type="search"] {padding-left: 10px; font-size: 18px; width: <?php echo $options['widget_search_width']; ?>%; background-color: <?php echo $options['widget_background_color']; ?>; }
              
.quake-widget .search_form_resoule input[type="search"]:focus {z-index: 3; height: 40px; border: 2px solid <?php echo $options['widget_background_color']; ?>; background-color: #fff; color: #080325;}
.comment_entry_data textarea {background-color: <?php echo $options['widget_background_color']; ?>;border: 3px solid <?php echo $options['widget_background_color']; ?>;color: #fff;}
              
.comment_entry_data input, .comment_entry_data textarea {background-color: <?php echo $options['widget_background_color']; ?>; border: 3px solid <?php echo $options['widget_background_color']; ?>; transition: .3s; color: #fff;}
              
.quake-sidebar .quake-contact-form {padding: 10px 0; margin: 0; width: <?php echo $options['widget_h2_width']; ?>%;}
.quake-sidebar .btn-quake-form {background-color: <?php echo $options['widget_button_color']; ?>; padding: <?php echo $options['widget_input_button_padding_top']; ?>px <?php echo $options['widget_input_button_padding_left']; ?>px; color: <?php echo $options['widget_button_font_color']; ?>;}
.quake-sidebar .quake-form-control {background: <?php echo $options['widget_input_color']; ?>; color: <?php echo $options['widget_input_font_color']; ?>;}
              
.btn-quake-form {background-color: <?php echo $options['footer_widget_button_color']; ?>; padding: <?php echo $options['footer_widget_input_button_padding_top']; ?>px <?php echo $options['footer_widget_input_button_padding_left']; ?>px; color: <?php echo $options['footer_widget_button_font_color']; ?>;}
              
.quake-form-control {background: <?php echo $options['footer_widget_input_color']; ?>; color: <?php echo $options['footer_widget_input_font_color']; ?>;}
			  
.quake-form-control:focus, .quake-form-control:active{border: 2px solid <?php echo $options['footer_widget_input_color']; ?>;}
              
              /* main page */
body {margin: <?php echo $options['quake_main_margin_top_bottom']; ?>% <?php echo $options['quake_main_margin_right_left']; ?>%; padding: <?php echo $options['quake_main_padding_top_bottom']; ?>% <?php echo $options['quake_main_padding_right_left']; ?>%;}
body a {color: <?php echo $options['a_color_of_main_page']; ?>;}
.load_more .btn-quake-load {color: <?php echo $options['a_color_of_main_page']; ?>;}
body a:hover {color: <?php echo $options['a_hover_color_of_main_page']; ?>;}
.button-container a:hover {color: <?php echo $options['a_hover_color_of_main_page']; ?>;}
body {color: <?php echo $options['p_color_of_main_page']; ?>;}  
              
.button-container {background: <?php echo $options['quake_main_button_color']; ?>; border: <?php echo $options['quake_button_border']; ?>px solid <?php echo $options['quake_main_button_border_color']; ?>;width: <?php echo $options['quake_button_width']; ?>px;height: <?php echo $options['quake_button_height']; ?>px;}
.load_more .button-container {width: <?php echo $options['button_load_more_width']; ?>px; height: <?php echo $options['button_load_more_height']; ?>px;}
.button-container:hover {background: <?php echo $options['quake_main_button_color_hover']; ?>; border: 1px solid <?php echo $options['quake_button_border_color_hover']; ?>;}
.footer {background: url(<?php echo $options['footer_background_image_src']; ?>)repeat <?php echo $options['parallax_footer_covor']; ?> ;     background-size: cover; padding: 0;}
.footer_continer {background: <?php echo $options['footer_background_color']; ?>;}
              
              /* single page*/
.entry-title, .entry-meta {text-align: <?php echo $options['time_and_category_alignment']; ?>;}
.entry-content p {font-size: <?php echo $options['content_of_post_font_size']; ?>px; font-weight: <?php echo $options['content_of_post_font_weight']; ?>;}
              
.ih-item.circle.effect1 .spinner {border: 10px solid <?php echo $options['circle_color_1']; ?>; border-right-color: <?php echo $options['circle_color_2']; ?>; border-bottom-color: <?php echo $options['circle_color_2']; ?>;}
              
.ih-item.circle.effect1.colored .info {background: #1a4a72; background: <?php echo $options['image_color_for_circle']; ?>;}
              
.ih-item.circle.effect1 .info h3 {font-size: <?php echo $options['full_name_font_size']; ?>px; font-weight: <?php echo $options['full_name_font_weight']; ?>;}
              
.ih-item.circle.effect1 .info p {font-size: <?php echo $options['description_font_size']; ?>px; font-weight: <?php echo $options['description_font_weight']; ?>;}
              /* submenu */
.main_manu li ul {background-image: linear-gradient(to bottom, <?php echo $options['submenu_background_color_1']; ?>, <?php echo $options['submenu_background_color_2']; ?>), url("<?php echo $options['submenu_background_source']; ?>"); width: <?php echo $options['width_of_submenu']; ?>px; left: 0;}
			  
.main_manu ul li ul li ul{left: <?php echo $options['Submenu_Submenu_position_left']; ?>px; right: <?php echo $options['Submenu_Submenu_position_right']; ?>px;}
  
			  
.main_manu_navbar_fixed ul:first-child li a{padding-top: <?php echo $options['fixed_logo_padding_top']; ?>px !important;}
.main_manu_navbar_fixed ul:first-child li a img{height: <?php echo $options['fixed_size_of_logo_height']; ?>px!important; width: <?php echo $options['fixed_size_of_logo_width']; ?>px!important;}
.main_manu_navbar_fixed ul:not(:first-child) li a{padding-top: <?php echo $options['fixed_menu_padding_top']; ?>px !important;}
.right_manu_fiexed .search_place {top: <?php echo $options['fixed_search_icon_top']; ?>px !important;}
.search_place{right: 10px;}
.right_manu_fiexed .quake-bars-icon{top: <?php echo $options['fixed_bars_icon_top']; ?>px;}
.navbar-fixed{height: <?php echo $options['fixed_menu_height']; ?>px;}
              
.page_404 h1 {font-size: <?php echo $options['404_h1_font_size']; ?>px;}
.page_404 h3 {font-size: <?php echo $options['404_h3_font_size']; ?>px;}
.page_404 p {font-size: <?php echo $options['404_p_font_size']; ?>px;}

body p{font-family: '<?php echo $options['body_p_font']; ?>', sans-serif;}
body a {font-family: '<?php echo $options['body_a_font']; ?>', sans-serif;}
body h1 {font-family: '<?php echo $options['body_h1_font']; ?>', sans-serif;}
body h2 {font-family: '<?php echo $options['body_h2_font']; ?>', sans-serif;}
body h3 {font-family: '<?php echo $options['body_h3_font']; ?>', sans-serif;}
			  
.footer_center_left ul li a:hover {color: <?php echo $options['footer_link_color']; ?>;}		  
.footer_right [type=submit]:hover {background: <?php echo $options['footer_button_hover_color']; ?>;}
.btn-quake-form:hover, .btn-quake-form:focus {background-color: <?php echo $options['footer_button_hover_color']; ?>;}

.comment-list .quake_main_name {background-color: <?php echo $options['comments_form_color']; ?>;}
.comment_author_img{border: 3px solid <?php echo $options['comments_form_color']; ?>; background: <?php echo $options['comments_form_color']; ?>;}
			  
@media screen and (max-width: 590px){
	.quake_query_button_main {width: 95%;margin: 0 2%;background: <?php echo $options['show_hide_sidebar_color']; ?>;border: none;padding: <?php echo $options['show_hide_sidebar_padding_top']; ?>px <?php echo $options['show_hide_sidebar_padding_left']; ?>%;  margin-bottom: 20px; transition: 1s;}
	.quake_query_button_main:hover {background: <?php echo $options['show_hide_sidebar_color_hover']; ?>;}
  }
          </style>
  </head>



  <body <?php body_class(); ?> id="main" style="direction: <?php echo $options['rtl_mode']; ?>;">
      
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v2.10&appId=414530458908432";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
      
      
 

 <div class="container-fluid">
        <div class="row">
            <div class="header">
                <?php if($options['header_style'] == 1){?>
                
                <div class="main_manu" style=" background-image:url(<?php echo $options['header_background_source']; ?>); border-bottom: <?php echo $options['quake_border_of_height']; ?>px <?php echo $options['quake_border_style']; ?> <?php echo $options['border_bottom_color']; ?>; padding:0;">
                    <div style="background-color:<?php if ($options['the_logo_same_color_of_header'] == 2){} else {echo $options['header_background_color'];} ?>; height: 100%; ">
                    <?php if ($options['logo'] == 1){ ?>
                    <ul><li><a href="<?php bloginfo('url'); ?>" style="padding: <?php echo $options['quake_main_manu_ul_li_margin_top']; ?>px <?php echo $options['quake_main_manu_ul_li_margin_right']; ?>px <?php echo $options['quake_main_manu_ul_li_margin_bottom']; ?>px <?php echo $options['quake_main_manu_ul_li_margin_left']; ?>px;"><img src="<?php echo $options['logo_source']; ?>" width="<?php echo $options['quake_width_of_logo']; ?>" height="<?php echo $options['quake_height_of_logo']; ?>"/></a></li></ul>
                    <?php } ?>
                     <?php
                        wp_nav_menu( array(
                            'theme_location' => 'Main_nav',
                            'container' => false,
                            'menu_class' => 'quake_main_manu_query'
                        ) );
                    ?>   
                            <!-- right manu -->
        
                    <div class="right_manu">
                        
                        <?php if($options['search_icon_left'] == 1){?>
                        <div class="search_place">
                            <div class="header_search_icon">
                                    <?php get_search_form(); ?>
                                    </div>
                            </div>
                    

                        <?php } ?>
	<div class="quake-bars-icon">
		<button>
		<svg height="20" width="24">
		  <line x1="0" y1="1" x2="200" y2="1" style="stroke:#fff;stroke-width:2" />
		  <line x1="0" y1="9" x2="200" y2="9" style="stroke:#fff;stroke-width:2" />
		  <line x1="0" y1="18" x2="200" y2="18" style="stroke:#fff;stroke-width:2" />
		</svg>
			</button>
	</div>
                    </div>
                </div> 
<?php  }else{ ?>
<div id="mySidenav" class="sidenav">
    <div id="vartical_menu_fade_in">
  <a href="javascript:void(0)" class="closebtn" onclick="">&times;</a>
    <?php wp_nav_menu( array('theme_location' => 'Main_nav',
                              'container' => false,
                              'menu_class' => '') );
                
     ?>  
    <aside id="secondary" class="widget_area" rol="complementary">
        <?php dynamic_sidebar( 'quake-vertical-menu' ); ?>
    </aside>
        <?php
            if ( ! dynamic_sidebar( 'quake-vertical-menu' ) ) {
                the_widget( 'WP_Widget_menu' );
            }
            ?>
        </div>
</div>
            <div class="background_v_menu"><span class="">M</span></div>
<div class="js-togglesidebar" id="vm_open">
    <div class="varical_menu_icon">
  <span class="quake_m" onclick="">M<span class="enu">ENU</span></span>
        </div>
</div>
   <?php } ?>      
    <!--        
<script>
    function openNav() {
        document.getElementById("mySidenav").style.top = "0";
        document.getElementById("vm_open").style.top = "610px";
        document.getElementById("vm_open").style.marginLeft = "0";
        document.getElementById("main").style.marginLeft = "20%";
        document.getElementById("mySidenav").style.overflowY = "scroll";
        document.querySelector("html").style.overflowY = "scroll";
        
    }

    function closeNav() {
        document.getElementById("mySidenav").style.top = "-635px";
        document.getElementById("vm_open").style.top = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.getElementById("mySidenav").style.overflowY = "hidden";
        document.querySelector("html").style.overflowY = "scroll";
    }
</script>-->
                </div>
            </div>
        </div> 
 </div>

