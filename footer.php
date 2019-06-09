<?php /*
        this is the template for the header
        
        @earth_quake
        */ 
$options=get_option('theme_options');
?>
<footer>
<div class="container-fluid" style="padding:0;">
    <div class="row">
    <div class="footer col-lg-12">
        <div class="footer_continer">
            
            <div class="footer_left col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div style="padding:<?php echo $options['logo_footer_padding_top']; ?>px <?php echo $options['logo_footer_padding_bottom']; ?>px ; height:<?php echo $options['quake_height_of_footer_logo']; ?>px; width:<?php echo $options['quake_width_of_footer_logo']; ?>px; background: url(<?php echo $options['footer_logo_source']; ?>) no-repeat; background-size: contain;"></div>
                
                <aside id="secondary" class="widget_area" rol="complementary">
                    <?php dynamic_sidebar( 'footer-widgets-1' ); ?>
                </aside>
                
                </div>
            
                <div class="footer_center_left col-lg-3 col-md-3 col-sm-4 col-xs-12">
                
                <aside id="secondary" class="widget_area" rol="complementary">
                    <?php dynamic_sidebar( 'footer-widgets-2' ); ?>
                </aside>
                   
                </div>
            
                <div class="footer_center_right col-lg-3 col-md-3 col-sm-4 col-xs-12">
                
                <aside id="secondary" class="widget_area" rol="complementary">
                    <?php dynamic_sidebar( 'footer-widgets-3' ); ?>
                </aside>
                   
                </div>
            
                <div class="footer_right col-lg-3 col-md-3 col-sm-4 col-xs-12">
                
                <aside id="secondary" class="widget_area" rol="complementary">
                    <?php dynamic_sidebar( 'footer-widgets-4' ); ?>
                </aside>
                    
                </div>
        </div>
    </div>
</div>
</div>
</footer>
<!-- font-awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
		  <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
		  <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
		  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
		  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
		  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
		  <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">


<?php wp_footer(); ?>
                    <script>
function expand() {
  $(".search").toggleClass("close");
  $(".input").toggleClass("square");
  if ($('.search').hasClass('close')) {
    $('.search_place .input').focus();
  } else {
    $('.search_place .input').blur();
  }
}
$('.search').on('click', expand);


             $(document).ready(function() {
  var nice = $("html").niceScroll({
            cursorcolor:"<?php echo $options['scrollbar_color']; ?>",
            cursorwidth:<?php echo $options['scrollbar_width']; ?>,
            cursoropacitymin:0.9,
            background:"<?php echo $options['scrollbar_background_color']; ?>",
            cursorborder:"0px solid #05987e",
            cursorborderradius: <?php echo $options['scrollbar_border_radius']; ?>,
            autohidemode:'leave'
                                 });
      $("#ascrail2000").css({'top': '<?php echo $options['scrollbar_background_position_top']; ?>px','right':'<?php echo $options['scrollbar_background_position_right']; ?>px','height':'<?php echo $options['scrollbar_background_height']; ?>%','bottom':'<?php echo $options['scrollbar_background_position_top']; ?>px','border-radius':'<?php echo $options['scrollbar_border_radius']; ?>px','cursor':'pointer','z-index':'1000'});
$("#div1").html($("#div1").html()+' '+nice.version);
                                                        });
						
						$('#comment-1 .ooooooquake').ready(function() {
if($(".ooooooquake").css("background").indexOf("https://wordpress.org/") === 5){
	$('#comment-1 .ooooooquake').css("background", "url('http://localhost/earth_quake/wp-content/themes/object-theme/img/wordpress-logo.png'), url(http://localhost/earth_quake/wp-content/themes/object-theme/img/no-body.png)");
	$('#comment-1 .ooooooquake').css("background-size", "cover");}
});
      </script>
  </body>
</html>