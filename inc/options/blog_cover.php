<h1>Main Page</h1>
						<!-- button font color -->
<div class="col-lg-6">
 <p>Main Background</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[bolg_background_covor_buttom_color]" value="<?php echo $options['bolg_background_covor_buttom_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                <!-- blog cover image -->
   <div class="clearfix"></div>
<div class="col-lg-6">
 <p>Choose Background</p>
</div>
 <div class="col-lg-6">
    <?php $checked_bolg_background_covor_buttom_1 = ( @$options['bolg_background_covor_buttom'] == 1 ? 'checked' : ''); 
    $checked_bolg_background_covor_buttom_2 = ( @$options['bolg_background_covor_buttom'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[bolg_background_covor_buttom]" value="1" id="site22" <?php echo $checked_bolg_background_covor_buttom_1; ?> >
                <label for="site22"><i class="fa fa-globe"></i> on</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[bolg_background_covor_buttom]" value="2" id="site42" <?php echo $checked_bolg_background_covor_buttom_2; ?> >
                <label for="site42"><i class="fa fa-trash-o"></i> off</label>
              </div>
            </div>
          </div>
        </div>
     </div>
<div class="clearfix"></div>
   <?php if( $options['bolg_background_covor_buttom'] == 1 ){ ?>
<div class="col-lg-12">
    <?php
            if( empty($options['bolg_background_covor']) ){
         echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-main-background"/><input type="hidden" id="main-background-picture" name="theme_options[bolg_background_covor]" value=""/>';
    }else{
         echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-main-background"/><input type="hidden" id="main-background-picture" name="theme_options[bolg_background_covor]" value="'.$options['bolg_background_covor'].'"/><input type="button" class="button button-secondary" value="Remove" id="remove-main-background"/>';
    }
        ?>
    <div class="image-container">
    <div id="main-background-picture-preview" class="profile-picture" style="background-image: url(<?php print $options['bolg_background_covor']; ?>); height:500px; width:100%; background-size: cover;"><?php if($options['the_blog_covor_same_color_of_header'] == 1){ ?>
            <div id="main_color_preview_general" style="background:<?php echo $options['bolg_background_covor_buttom_color']; ?>; height:100%; width:100%;"></div>
        <?php
        } ?></div>
    </div>

    <div class="col-lg-6" style="padding: 0;">
    <p>The Same Color Of Header</p>
    </div>
 <div class="col-lg-6">
    <?php 
    $checked_the_blog_covor_same_color_of_header_1 = ( @$options['the_blog_covor_same_color_of_header'] == 1 ? 'checked' : ''); 
    $checked_the_blog_covor_same_color_of_header_2 = ( @$options['the_blog_covor_same_color_of_header'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[the_blog_covor_same_color_of_header]" value="1" id="site23" <?php echo $checked_the_blog_covor_same_color_of_header_1; ?> >
                <label for="site23"><i class="fa fa-globe"></i> Yes</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[the_blog_covor_same_color_of_header]" value="2" id="site43" <?php echo $checked_the_blog_covor_same_color_of_header_2; ?> >
                <label for="site43"><i class="fa fa-trash-o"></i> No</label>
              </div>
            </div>
          </div>
        </div>
     </div>
    
        <div class="col-lg-6" style="padding: 0;">
    <p>Parallax</p>
    </div>
 <div class="col-lg-6">
    <?php 
    $checked_parallax_blog_covor_1 = ( @$options['parallax_blog_covor'] == 'fixed' ? 'checked' : ''); 
    $checked_parallax_blog_covor_2 = ( @$options['parallax_blog_covor'] != 'fixed' ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[parallax_blog_covor]" value="fixed" id="site24" <?php echo $checked_parallax_blog_covor_1; ?> >
                <label for="site24"><i class="fa fa-globe"></i> on </label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[parallax_blog_covor]" value="" id="site44" <?php echo $checked_parallax_blog_covor_2; ?> >
                <label for="site44"><i class="fa fa-trash-o"></i> off</label>
              </div>
            </div>
          </div>
        </div>
     </div>
</div>
          <?php
    }
        ?>
                            <!-- a color of main page -->
<div class="col-lg-6">
 <p>Links >> Color Of Font Main Page</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[a_color_of_main_page]" value="<?php echo $options['a_color_of_main_page']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                <!-- a hover color of main page -->
<div class="col-lg-6">
 <p>Links >> Hover Color Of Font Main Page</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[a_hover_color_of_main_page]" value="<?php echo $options['a_hover_color_of_main_page']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                    <!-- p color of main page -->
<div class="col-lg-6">
 <p>Paragraphs >> Color Of Font Main Page</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[p_color_of_main_page]" value="<?php echo $options['p_color_of_main_page']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
<h1>Buttons</h1>
<div class="clearfix"></div>
                                    <!-- button color -->
<div class="col-lg-6">
 <p>Button >> Background Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[quake_main_button_color]" value="<?php echo $options['quake_main_button_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                   <!-- button color hover -->
<div class="col-lg-6">
 <p>Button >> Background Color : Hover</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[quake_main_button_color_hover]" value="<?php echo $options['quake_main_button_color_hover']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>
                                    <!-- button height-->
<div class="col-lg-6">
         Button >> Height
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['quake_button_height']; ?>" name="theme_options[quake_button_height]" min="1"/> PX
</div>
<div class="clearfix"></div>
                                    <!-- button width-->
<div class="col-lg-6">
         Button >> Width
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['quake_button_width']; ?>" name="theme_options[quake_button_width]" min="1"/> Px
</div>
<div class="clearfix"></div>
                                    <!-- button border -->
<div class="col-lg-6">
         Button >> Border
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['quake_button_border']; ?>" name="theme_options[quake_button_border]" min="1"/> PX
</div>
<div class="clearfix"></div>
                                    <!-- button border color -->
<div class="col-lg-6">
 <p>Button >> Border Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[quake_main_button_border_color]" value="<?php echo $options['quake_main_button_border_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                        <!-- button border color hover -->
<div class="col-lg-6">
 <p>button >> Border Color : Hover</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[quake_button_border_color_hover]" value="<?php echo $options['quake_button_border_color_hover']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>


<h1>Load More Buttons</h1>
                                        <!-- Button Load More Width -->
<div class="col-lg-6">
         Button Load More Width
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['button_load_more_width']; ?>" name="theme_options[button_load_more_width]" min="1"/> PX
</div>
<div class="clearfix"></div>
                                        <!-- Button Load More Height -->
<div class="col-lg-6">
         Button Load More Height
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['button_load_more_height']; ?>" name="theme_options[button_load_more_height]" min="1"/> PX
</div>
<div class="clearfix"></div>