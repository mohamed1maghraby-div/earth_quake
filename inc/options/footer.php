<h1>Footer</h1>
							<!-- footer background color -->
<div class="col-lg-6">
 <p>Footer Background Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[footer_background_color]" value="<?php echo $options['footer_background_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                <!-- footer background image -->
<div class="col-lg-6">
 <p>Footer Background Image</p>
</div>
 <div class="col-lg-6">
    <?php $footer_background_image_1 = ( @$options['footer_background_image'] == 1 ? 'checked' : ''); 
    $footer_background_image_2 = ( @$options['footer_background_image'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[footer_background_image]" value="1" id="site30" <?php echo $footer_background_image_1; ?> >
                <label for="site30"><i class="fa fa-globe"></i> on</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[footer_background_image]" value="2" id="site50" <?php echo $footer_background_image_2; ?> >
                <label for="site50"><i class="fa fa-trash-o"></i> off</label>
              </div>
            </div>
          </div>
        </div>
     </div>
<div class="clearfix"></div>
   <?php if( $options['footer_background_image'] == 1 ){ ?>
<div class="col-lg-12">
    <?php
            if( empty($options['footer_background_image_src']) ){
         echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-footer-background-src"/><input type="hidden" id="footer-background-picture" name="theme_options[footer_background_image_src]" value=""/>';
    }else{
         echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-footer-background-src"/><input type="hidden" id="footer-background-picture" name="theme_options[footer_background_image_src]" value="'.$options['footer_background_image_src'].'"/><input type="button" class="button button-secondary" value="Remove" id="remove-footer-background"/>';
    }
        ?>
    <div class="image-container">
    <div id="footer-background-picture-preview" class="profile-picture" style="background-image: url(<?php print $options['footer_background_image_src']; ?>); height:500px; width:100%; background-size: cover;"><?php if($options['the_footer_covor_same_color_of_header'] == 1){ ?>
            <div id="main_color_footer_preview_general" style="background:<?php echo $options['footer_background_color']; ?>; height:100%; width:100%;"></div>
        <?php
        } ?></div>
    </div>
<div class="clearfix"></div> 
    <div class="col-lg-6" style="padding: 0;">
    	<p>The Same Color Of Header</p>
    </div>
 <div class="col-lg-6">
    <?php 
    $checked_the_footer_covor_same_color_of_header_1 = ( @$options['the_footer_covor_same_color_of_header'] == 1 ? 'checked' : ''); 
    $checked_the_footer_covor_same_color_of_header_2 = ( @$options['the_footer_covor_same_color_of_header'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[the_footer_covor_same_color_of_header]" value="1" id="site7" <?php echo $checked_the_footer_covor_same_color_of_header_1; ?> >
                <label for="site7"><i class="fa fa-globe"></i> Yes</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[the_footer_covor_same_color_of_header]" value="2" id="site8" <?php echo $checked_the_footer_covor_same_color_of_header_2; ?> >
                <label for="site8"><i class="fa fa-trash-o"></i> No</label>
              </div>
            </div>
          </div>
        </div>
     </div>
<div class="clearfix"></div> 
	<div class="col-lg-6" style="padding: 0;">
    	<p>Parallax</p>
    </div>
 <div class="col-lg-6">
    <?php 
    $quake_checked_parallax_footer_covor_1 = ( @$options['parallax_footer_covor'] == 'fixed' ? 'checked' : ''); 
    $quake_checked_parallax_footer_covor_2 = ( @$options['parallax_footer_covor'] != 'fixed' ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[parallax_footer_covor]" value="fixed" id="site9" <?php echo $quake_checked_parallax_footer_covor_1; ?> >
                <label for="site9"><i class="fa fa-globe"></i> on </label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[parallax_footer_covor]" value="" id="site10" <?php echo $quake_checked_parallax_footer_covor_2; ?> >
                <label for="site10"><i class="fa fa-trash-o"></i> off</label>
              </div>
            </div>
          </div>
        </div>
     </div>
</div>
          <?php
    }
        ?>
<div class="clearfix"></div> 
<h1>Footer Logo</h1>
                            <!-- logo -->
   <div class="clearfix"></div>                                         
<div class="col-lg-6">
 <p>Logo</p>
</div>
 <div class="col-lg-6">
    <?php $checked_footer_logo_1 = ( @$options['footer_logo'] == 1 ? 'checked' : ''); 
    $checked_footer_logo_2 = ( @$options['footer_logo'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[footer_logo]" value="1" id="site34" <?php echo $checked_footer_logo_1; ?> >
                <label for="site34"><i class="fa fa-globe"></i> on</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[footer_logo]" value="2" id="site51" <?php echo $checked_footer_logo_2; ?> >
                <label for="site51"><i class="fa fa-trash-o"></i> off</label>
              </div>
            </div>
          </div>
        </div>
     </div>
    <div class="clearfix"></div>
  <?php if( $options['footer_logo'] == 1 ){ ?>
<div class="col-lg-6">
 <p>Logo Image</p>
</div>
<div class="col-lg-6">
    <?php
    
            if( empty($options['footer_logo_source']) ){
         echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-footer-logo"/><input type="hidden" id="quake_footer_logo" name="theme_options[footer_logo_source]" value=""/>';
    }else{
         echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-footer-logo"/><input type="hidden" id="quake_footer_logo" name="theme_options[footer_logo_source]" value="'.$options['footer_logo_source'].'"/><input type="button" class="button button-secondary" value="Remove" id="remove_footer_logo"/>';
    }
        ?>
    <div class="image-container">
    <div id="quake_footer_logo_preview" class="profile-picture" style="background-image: url(<?php print $options['footer_logo_source']; ?>); height:50px; width:50%; background-size: cover;">
        <div id="logo_color_preview" style="background:<?php echo $options['logo_source_color']; ?>; height:100%; width:100%;"></div></div>
    </div>
</div>
<div class="clearfix"></div> 
<div class="col-lg-6">
 <p>Size Of Logo</p>
</div>
<div class="col-lg-6 background_input">
 <p>Height</p><input class="small_input" type="number" name="theme_options[quake_height_of_footer_logo]" value="<?php echo $options['quake_height_of_footer_logo']; ?>"/> Px
 <p>Width</p><input class="small_input" type="number" name="theme_options[quake_width_of_footer_logo]" value="<?php echo $options['quake_width_of_footer_logo']; ?>"/> Px
</div>
     <?php
    }
        ?> 
<div class="clearfix"></div> 
                                <!-- left padding -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    Padding
    </div>
    <div class="col-lg-6 background_input">
		<p>Top & Bottom</p>
        <input class="small_input" type="number" value="<?php echo $options['logo_footer_padding_top']; ?>" name="theme_options[logo_footer_padding_top]"/> Px
		<p>Left & Right</p>
        <input class="small_input" type="number" value="<?php echo $options['logo_footer_padding_bottom']; ?>" name="theme_options[logo_footer_padding_bottom]"/> Px
    </div>
</div>

<div class="clearfix"></div> 
<h1>Footer Widgets Subscribe Us And Connect With Us</h1>
<div class="clearfix"></div>    
                                        <!-- footer input color -->
<div class="col-lg-6">
 <p>Footer >> Input Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[footer_widget_input_color]" value="<?php echo $options['footer_widget_input_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>   
                                    <!-- footer input font color -->
<div class="col-lg-6">
 <p>Footer >> Input Font Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[footer_widget_input_font_color]" value="<?php echo $options['footer_widget_input_font_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>  
                                    <!-- footer button color -->
<div class="col-lg-6">
 <p>Footer >> Button Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[footer_widget_button_color]" value="<?php echo $options['footer_widget_button_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                    <!-- footer button hover color -->
<div class="col-lg-6">
 <p>Footer >> Button Hover Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[footer_button_hover_color]" value="<?php echo $options['footer_button_hover_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                        <!-- footer button font color -->
<div class="col-lg-6">
 <p>Footer >> Button Font Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[footer_widget_button_font_color]" value="<?php echo $options['footer_widget_button_font_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                        <!-- footer link color -->
<div class="col-lg-6">
 <p>Footer >> Link Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[footer_link_color]" value="<?php echo $options['footer_link_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                <!-- footer button padding top -->
<div class="col-lg-6">
        <p>Footer >> Button Padding Top And Bottom</p>
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['footer_widget_input_button_padding_top']; ?>" name="theme_options[footer_widget_input_button_padding_top]" max="100" min="1"/> Px
</div>
<div class="clearfix"></div>
                                <!-- footer button padding left-->
<div class="col-lg-6">
    <p>Footer >> Button Padding Left And Right</p>
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['footer_widget_input_button_padding_left']; ?>" name="theme_options[footer_widget_input_button_padding_left]" max="100" min="1"/> Px
</div>
<div class="clearfix"></div>