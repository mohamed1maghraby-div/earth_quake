<h1>Top Main Page</h1>
<div class="clearfix"></div>
						<!-- Show Title of blog -->
<div class="col-lg-6">
    Show Title Of Blog
</div>
<div class="col-lg-6 background_input">
    <a href="./admin.php?page=earth_quake_theme_r">this page</a> 
</div>
<div class="clearfix"></div>
<div class="col-lg-6">
    Padding Top >> Title Of Blog
</div>
<div class="col-lg-6 background_input">
    <input type="number" value="<?php echo $options['padding_of_title_of_blog']; ?>" name="theme_options[padding_of_title_of_blog]"/> Px
</div>
<div class="clearfix"></div>
<div class="col-lg-6">
    Padding Right >> Title Of blog
</div>
<div class="col-lg-6 background_input">
    <input type="number" value="<?php echo $options['padding_right_of_title_of_blog']; ?>" name="theme_options[padding_right_of_title_of_blog]"/> Px
</div>
<div class="clearfix"></div>
<div class="col-lg-6">
    Padding Left >> Title of blog
</div>
<div class="col-lg-6 background_input">
    <input type="number" value="<?php echo $options['padding_left_of_title_of_blog']; ?>" name="theme_options[padding_left_of_title_of_blog]"/> Px
</div>
<div class="clearfix"></div>
<div class="the_same_color_of_header">
    <div class="col-lg-6">
        Text Align
    </div>
    <div class="col-lg-6">
    <select class="form-control formcontrolpad input-lg" name="theme_options[page1_h1_text_align]">
    <?php 
        $selected = '';
        if ($options['page1_h1_text_align'] == 'right') $page1_h1_text_align = ' selected="selected"';
        if ($options['page1_h1_text_align'] == 'center') $page1_h1_text_align_1 = ' selected="selected"';
        if ($options['page1_h1_text_align'] == 'left') $page1_h1_text_align_2 = ' selected="selected"';
    ?>
        <option value="right" <?php echo $page1_h1_text_align ?>>right</option>
        <option value="center" <?php echo $page1_h1_text_align_1 ?>>center</option>
        <option value="left" <?php echo $page1_h1_text_align_2 ?>>left</option>
    </select>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-lg-6">
 <p>Page1 H1 Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[page1_h1_color]" value="<?php echo $options['page1_h1_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>
<div class="col-lg-6">
    H1 Font Size
</div>
<div class="col-lg-6 background_input">
    <input type="number" value="<?php echo $options['page1_h1_font_size']; ?>" name="theme_options[page1_h1_font_size]"/> Px
</div>
<div class="clearfix"></div>
                               <!-- Header background Color -->
<div class="col-lg-6">
 <p>Header Background Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[page1_background_color]" value="<?php echo $options['page1_background_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>
<div class="the_same_color_of_header">
    <div class="col-lg-6">
        Font Weight
    </div>
    <div class="col-lg-6">
    <select class="form-control formcontrolpad input-lg" name="theme_options[page1_h1_font_weight]">
    <?php 
        $selected = '';
        if ($options['page1_h1_font_weight'] == '100') $page1_h1_font_weight = ' selected="selected"';
        if ($options['page1_h1_font_weight'] == '200') $page1_h1_font_weight_1 = ' selected="selected"';
        if ($options['page1_h1_font_weight'] == '300') $page1_h1_font_weight_2 = ' selected="selected"';
        if ($options['page1_h1_font_weight'] == '400') $page1_h1_font_weight_3 = ' selected="selected"';
        if ($options['page1_h1_font_weight'] == '500') $page1_h1_font_weight_4 = ' selected="selected"';
        if ($options['page1_h1_font_weight'] == '600') $page1_h1_font_weight_5 = ' selected="selected"';
        if ($options['page1_h1_font_weight'] == '700') $page1_h1_font_weight_6 = ' selected="selected"';
        if ($options['page1_h1_font_weight'] == '800') $page1_h1_font_weight_7 = ' selected="selected"';
        if ($options['page1_h1_font_weight'] == '900') $page1_h1_font_weight_8 = ' selected="selected"';
    ?>
        <option value="100" <?php echo $page1_h1_font_weight ?>>100</option>
        <option value="200" <?php echo $page1_h1_font_weight_1 ?>>200</option>
        <option value="300" <?php echo $page1_h1_font_weight_2 ?>>300</option>
        <option value="400" <?php echo $page1_h1_font_weight_3 ?>>400</option>
        <option value="500" <?php echo $page1_h1_font_weight_4 ?>>500</option>
        <option value="600" <?php echo $page1_h1_font_weight_5 ?>>600</option>
        <option value="700" <?php echo $page1_h1_font_weight_6 ?>>700</option>
        <option value="800" <?php echo $page1_h1_font_weight_7 ?>>800</option>
        <option value="900" <?php echo $page1_h1_font_weight_8 ?>>900</option>
    </select>
    </div>
</div>
                                          <!-- Header Background -->
   <div class="clearfix"></div>
<div class="col-lg-6">
 <p>Header Background</p>
</div>
 <div class="col-lg-6">
    <?php $checked_page1_background_on_1 = ( @$options['page1_background_on'] == 1 ? 'checked' : ''); 
    $checked_page1_background_on_2 = ( @$options['page1_background_on'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[page1_background_on]" value="1" id="site68" <?php echo $checked_page1_background_on_1; ?> >
                <label for="site68"><i class="fa fa-globe"></i> on</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[page1_background_on]" value="2" id="site69" <?php echo $checked_page1_background_on_2; ?> >
                <label for="site69"><i class="fa fa-trash-o"></i> off</label>
              </div>
            </div>
          </div>
        </div>
     </div>
<div class="clearfix"></div>
   <?php if( $options['page1_background_on'] == 1 ){ ?>
<div class="col-lg-12">
    <?php
            if( empty($options['page1_background_source']) ){
         echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-page1-background"/><input type="hidden" id="page1-background-picture" name="theme_options[page1_background_source]" value=""/>';
    }else{
         echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-page1-background"/><input type="hidden" id="page1-background-picture" name="theme_options[page1_background_source]" value="'.$options['page1_background_source'].'"/><input type="button" class="button button-secondary" value="Remove" id="remove-page1-background"/>';
    }
        ?>
    <div class="image-container">
    <div id="page1-background-picture-preview" class="profile-picture" style="background-image: url(<?php print $options['page1_background_source']; ?>); height:<?php echo $options['quake_page1_height']; ?>px; width:100%; background-size: cover;">
        <h1 style="padding-top: <?php echo $options['padding_of_title_of_blog']; ?>px; padding-right: <?php echo $options['padding_right_of_title_of_blog']; ?>px; padding-left: <?php echo $options['padding_left_of_title_of_blog']; ?>px; text-align: <?php echo $options['page1_h1_text_align']; ?>; position: absolute; width: 100%; background: transparent; color: <?php echo $options['page1_h1_color']; ?>; font-size: <?php echo $options['page1_h1_font_size']; ?>px; font-weight: <?php echo $options['page1_h1_font_weight']; ?>;"><?php echo $options['Show_Title_of_blog']; ?></h1>
        <?php if($options['the_page1_same_color_of_header'] == 1){ ?>
            <div id="main_color_preview_general" style="background:<?php echo $options['page1_background_color']; ?>; height:100%; width:100%;"></div>
        <?php
        } ?></div>
    </div>
<div class="the_same_color_of_header">
	<div class="clearfix"></div>
    <div class="col-lg-6" style="padding: 0;">
    <p>The Same Color Of Header</p>
    </div>
 <div class="col-lg-6">
    <?php 
    $checked_the_page1_same_color_of_header_1 = ( @$options['the_page1_same_color_of_header'] == 1 ? 'checked' : ''); 
    $checked_the_page1_same_color_of_header_2 = ( @$options['the_page1_same_color_of_header'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[the_page1_same_color_of_header]" value="1" id="site28" <?php echo $checked_the_page1_same_color_of_header_1; ?> >
                <label for="site28"><i class="fa fa-globe"></i> Yes</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[the_page1_same_color_of_header]" value="2" id="site48" <?php echo $checked_the_page1_same_color_of_header_2; ?> >
                <label for="site48"><i class="fa fa-trash-o"></i> No</label>
              </div>
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
<div class="col-lg-6">
        Height Of Image
    </div>
    <div class="col-lg-6 background_input">
        <input class="small_input" type="number" value="<?php echo $options['quake_page1_height']; ?>" name="theme_options[quake_page1_height]"/>
    </div>
<div class="clearfix"></div>
<div class="col-lg-6">
     <p>Parallax</p>
    </div>
     <div class="col-lg-6">
        <?php $checked_page1_Parallax_1 = ( @$options['page1_Parallax'] == 'fixed' ? 'checked' : ''); 
        $checked_page1_Parallax_2 = ( @$options['page1_Parallax'] != 'fixed' ? 'checked' : '');?>
           <div class="form-group">
              <div class="input-group" role="group">
                <div class="input-group-radio">
                  <div class="radio-btn radio-btn-primary">
                    <input type="radio" name="theme_options[page1_Parallax]" value="fixed" id="site29" <?php echo $checked_page1_Parallax_1; ?> >
                    <label for="site29"><i class="fa fa-globe"></i> on</label>
                  </div>
                </div>
                <div class="input-group-radio">
                  <div class="radio-btn radio-btn-primary">
                    <input type="radio" name="theme_options[page1_Parallax]" value="" id="site49" <?php echo $checked_page1_Parallax_2; ?> >
                    <label for="site49"><i class="fa fa-trash-o"></i> off</label>
                  </div>
                </div>
              </div>
            </div>
         </div>