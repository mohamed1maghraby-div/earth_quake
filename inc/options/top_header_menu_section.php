<h1>Top Header Menu</h1>
							<!-- Header background Color -->
<div class="col-lg-6">
 	<p>Header Background Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[header_background_color]" value="<?php echo $options['header_background_color']; ?>" class="color-picker" data-alpha="true" />
</div>
                             <!-- Header Background -->
<div class="clearfix"></div>
<div class="col-lg-6">
 	<p>Header Background</p>
</div>
 <div class="col-lg-6">
    <?php $checked_header_background_on_1 = ( @$options['header_background_on'] == 1 ? 'checked' : ''); 
    $checked_header_background_on_2 = ( @$options['header_background_on'] == 2 ? 'checked' : '');?>
   <div class="form-group">
	  <div class="input-group" role="group">
		<div class="input-group-radio">
		  <div class="radio-btn radio-btn-primary">
			<input type="radio" name="theme_options[header_background_on]" value="1" id="site18" <?php echo $checked_header_background_on_1; ?> >
			<label for="site18"><i class="fa fa-globe"></i> on</label>
		  </div>
		</div>
		<div class="input-group-radio">
		  <div class="radio-btn radio-btn-primary">
			<input type="radio" name="theme_options[header_background_on]" value="2" id="site38" <?php echo $checked_header_background_on_2; ?> >
			<label for="site38"><i class="fa fa-trash-o"></i> off</label>
		  </div>
		</div>
	  </div>
	</div>
</div>
<div class="clearfix"></div>
<?php if( $options['header_background_on'] == 1 ){ ?>
<div class="col-lg-12">
    <?php
            if( empty($options['header_background_source']) ){
         echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-header-background"/><input type="hidden" id="header-background-picture" name="theme_options[header_background_source]" value=""/>';
    }else{
         echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-header-background"/><input type="hidden" id="header-background-picture" name="theme_options[header_background_source]" value="'.$options['header_background_source'].'"/><input type="button" class="button button-secondary" value="Remove" id="remove-header-background"/>';
    }
        ?>
    <div class="image-container">
    <div id="header-background-picture-preview" class="profile-picture" style="background-image: url(<?php print $options['header_background_source']; ?>); height:89px; width:100%; background-size: cover;"><?php if($options['the_logo_same_color_of_header'] == 1){ ?>
            <div id="main_color_preview_general" style="background:<?php echo $options['header_background_color']; ?>; height:100%; width:100%;"></div>
        <?php
        } ?></div>
    </div>
<div class="the_same_color_of_header">
    <div class="col-lg-6" style="padding: 0;">
    <p>The Same Color Of Header</p>
    </div>
 <div class="col-lg-6">
    <?php 
    $checked_the_logo_same_color_of_header_1 = ( @$options['the_logo_same_color_of_header'] == 1 ? 'checked' : ''); 
    $checked_the_logo_same_color_of_header_2 = ( @$options['the_logo_same_color_of_header'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[the_logo_same_color_of_header]" value="1" id="site19" <?php echo $checked_the_logo_same_color_of_header_1; ?> >
                <label for="site19"><i class="fa fa-globe"></i> Yes</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[the_logo_same_color_of_header]" value="2" id="site39" <?php echo $checked_the_logo_same_color_of_header_2; ?> >
                <label for="site39"><i class="fa fa-trash-o"></i> No</label>
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
                                <!-- main menu border  -->
      

    <div class="col-lg-6">
        Border Bottom Hight
    </div>
    <div class="col-lg-6 background_input">
        <input class="small_input" type="number" value="<?php echo $options['quake_border_of_height']; ?>" name="theme_options[quake_border_of_height]"/> px
    </div>
<div class="clearfix"></div> 
<div class="the_same_color_of_header">
    <div class="col-lg-6">
        Border Style
    </div>
    <div class="col-lg-6">
    <select class="form-control input-lg" name="theme_options[quake_border_style]">
    <?php 
        $selected = '';
        if ($options['quake_border_style'] == 'solid') $quake_border_style = ' selected="selected"';
        if ($options['quake_border_style'] == 'dotted') $quake_border_style_1 = ' selected="selected"';
        if ($options['quake_border_style'] == 'dashed') $quake_border_style_2 = ' selected="selected"';
        if ($options['quake_border_style'] == 'groove') $quake_border_style_3 = ' selected="selected"';
        if ($options['quake_border_style'] == 'ridge') $quake_border_style_4 = ' selected="selected"';
    ?>
        <option value="solid" <?php echo $quake_border_style ?>>solid</option>
        <option value="dotted" <?php echo $quake_border_style_1 ?>>dotted</option>
        <option value="dashed" <?php echo $quake_border_style_2 ?>>dashed</option>
        <option value="groove" <?php echo $quake_border_style_3 ?>>groove</option>
        <option value="ridge" <?php echo $quake_border_style_4 ?>>ridge</option>
    </select>
    </div>
</div>
<div class="clearfix"></div> 
<div class="the_same_color_of_header">
    <div class="col-lg-6">
     <p>Border Bottom Color</p>
    </div>

    <div class="col-lg-6 ">
        <input  type="text" name="theme_options[border_bottom_color]" value="<?php echo $options['border_bottom_color']; ?>" class="color-picker" data-alpha="true" />
    </div>
</div>

<div class="clearfix"></div> 
<h1>left mian menu</h1>
                            <!-- logo -->
   <div class="clearfix"></div>                                         
<div class="col-lg-6">
 <p>Logo</p>
</div>
 <div class="col-lg-6">
    <?php $checked_logo_1 = ( @$options['logo'] == 1 ? 'checked' : ''); 
    $checked_logo_2 = ( @$options['logo'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[logo]" value="1" id="site16" <?php echo $checked_logo_1; ?> >
                <label for="site16"><i class="fa fa-globe"></i> on</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[logo]" value="2" id="site36" <?php echo $checked_logo_2; ?> >
                <label for="site36"><i class="fa fa-trash-o"></i> off</label>
              </div>
            </div>
          </div>
        </div>
     </div>
    <div class="clearfix"></div>
  <?php if( $options['logo'] == 1 ){ ?>
<div class="col-lg-6">
 <p>Logo Image</p>
</div>
<div class="col-lg-6">
    <?php
    
            if( empty($options['logo_source']) ){
         echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-logo"/><input type="hidden" id="quake_logo" name="theme_options[logo_source]" value=""/>';
    }else{
         echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-logo"/><input type="hidden" id="quake_logo" name="theme_options[logo_source]" value="'.$options['logo_source'].'"/><input type="button" class="button button-secondary" value="Remove" id="remove_logo"/>';
    }
        ?>
    <div class="image-container">
    <div id="quake_logo_preview" class="profile-picture" style="background-image: url(<?php print $options['logo_source']; ?>); height:50px; width:50%; background-size: cover;">
        <div id="logo_color_preview" style="background:<?php echo $options['logo_source_color']; ?>; height:100%; width:100%;"></div></div>
    </div>
</div>

<div class="col-lg-6">
 <p>Size Of Logo</p>
</div>
<div class="col-lg-6 background_input">
 <p>Height</p><input class="small_input" type="number" name="theme_options[quake_height_of_logo]" value="<?php echo $options['quake_height_of_logo']; ?>"/> px
 <p>Width</p><input class="small_input" type="number" name="theme_options[quake_width_of_logo]" value="<?php echo $options['quake_width_of_logo']; ?>"/> px
</div>
     <?php
    }
        ?> 
                                <!-- left padding -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    Padding Menu
    </div>
    <div class="col-lg-6 background_input">
		<p>Top & Bottom</p>
        <input class="small_input" type="number" value="<?php echo $options['quake_main_manu_ul_li_padding_top']; ?>" name="theme_options[quake_main_manu_ul_li_padding_top]"/> px
		<p>Left & Right</p>
        <input class="small_input" type="number" value="<?php echo $options['quake_main_manu_ul_li_padding_bottom']; ?>" name="theme_options[quake_main_manu_ul_li_padding_bottom]"/> px
    </div>
</div>
                                <!-- left margin -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    Padding Of Logo
    </div>
    <div class="col-lg-6 background_input">
		<p>Top</p>
        <input class="small_input" type="number" value="<?php echo $options['quake_main_manu_ul_li_margin_top']; ?>" name="theme_options[quake_main_manu_ul_li_margin_top]"/> px
		<p>Bottom</p>
        <input class="small_input" type="number" value="<?php echo $options['quake_main_manu_ul_li_margin_bottom']; ?>" name="theme_options[quake_main_manu_ul_li_margin_bottom]"/> px
		<p>Right</p>
        <input class="small_input" type="number" value="<?php echo $options['quake_main_manu_ul_li_margin_right']; ?>" name="theme_options[quake_main_manu_ul_li_margin_right]"/> px
		<p>Left</p>
        <input class="small_input" type="number" value="<?php echo $options['quake_main_manu_ul_li_margin_left']; ?>" name="theme_options[quake_main_manu_ul_li_margin_left]"/> px
    </div>
</div>
<div class="clearfix"></div>
<h1>Right Menu </h1>
<div class="clearfix"></div>
                                <!-- search icon left -->
<div class="col-lg-6">
 <p>search icon left</p>
</div>
 <div class="col-lg-6">
    <?php $search_icon_left_1 = ( @$options['search_icon_left'] == 1 ? 'checked' : ''); 
    $search_icon_left_2 = ( @$options['search_icon_left'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[search_icon_left]" value="1" id="site74" <?php echo $search_icon_left_1; ?> >
                <label for="site74"><i class="fa fa-globe"></i> on</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[search_icon_left]" value="2" id="site75" <?php echo $search_icon_left_2; ?> >
                <label for="site75"><i class="fa fa-trash-o"></i> off</label>
              </div>
            </div>
          </div>
        </div>
     </div>
<div class="clearfix"></div>
<h1>Fixed Menu >> After Scroll</h1>
<div class="clearfix"></div>
                                <!-- fixed menu  height-->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    Fixed Menu Height
    </div>
    <div class="col-lg-6 background_input">
        <input class="small_input" type="number" value="<?php echo $options['fixed_menu_height']; ?>" name="theme_options[fixed_menu_height]"/> px
    </div>
</div>
<div class="clearfix"></div>
                                <!-- fixed size of logo -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    Fixed Size Of Logo
    </div>
    <div class="col-lg-6 background_input">
		<p>Height</p>
        <input class="small_input" type="number" value="<?php echo $options['fixed_size_of_logo_height']; ?>" name="theme_options[fixed_size_of_logo_height]"/> px
		<p>Width</p>
        <input class="small_input" type="number" value="<?php echo $options['fixed_size_of_logo_width']; ?>" name="theme_options[fixed_size_of_logo_width]"/> px
    </div>
</div>
<div class="clearfix"></div>
                                <!-- fixed logo padding top-->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    Fixed Logo Padding Top
    </div>
    <div class="col-lg-6 background_input">
        <input class="small_input" type="number" value="<?php echo $options['fixed_logo_padding_top']; ?>" name="theme_options[fixed_logo_padding_top]"/> px
    </div>
</div>
<div class="clearfix"></div>
                                <!-- fixed menu padding top-->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    Fixed Menu Padding Top
    </div>
    <div class="col-lg-6 background_input">
        <input class="small_input" type="number" value="<?php echo $options['fixed_menu_padding_top']; ?>" name="theme_options[fixed_menu_padding_top]"/> px
    </div>
</div>
<div class="clearfix"></div>
                                <!-- fixed search icon top-->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    Fixed Search Icon Top
    </div>
    <div class="col-lg-6 background_input">
        <input class="small_input" type="number" value="<?php echo $options['fixed_search_icon_top']; ?>" name="theme_options[fixed_search_icon_top]"/> px
    </div>
</div>
<div class="clearfix"></div>
                                <!-- fixed bars icon top-->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    Fixed Bars Icon Top
    </div>
    <div class="col-lg-6 background_input">
        <input class="small_input" type="number" value="<?php echo $options['fixed_bars_icon_top']; ?>" name="theme_options[fixed_bars_icon_top]"/> px
    </div>
</div>
<div class="clearfix"></div>

<h1>Submenu</h1>
<div class="clearfix"></div>
                                <!-- submenu background Color -->
<div class="col-lg-6">
 <p>Submenu Background Gradient Color</p>
</div>

<div class="col-lg-6 ">
	<p>Color 1</p>
    <input  type="text" name="theme_options[submenu_background_color_1]" value="<?php echo $options['submenu_background_color_1']; ?>" class="color-picker" data-alpha="true" />
	<p>Color 2</p>
    <input  type="text" name="theme_options[submenu_background_color_2]" value="<?php echo $options['submenu_background_color_2']; ?>" class="color-picker" data-alpha="true" />
</div>
                                <!-- back ground submenu -->
   <div class="clearfix"></div>
<div class="col-lg-6">
 <p>Header Background</p>
</div>
 <div class="col-lg-6">
    <?php $checked_submenu_background_bottom_1 = ( @$options['submenu_background_bottom'] == 1 ? 'checked' : ''); 
    $checked_submenu_background_bottom_2 = ( @$options['submenu_background_bottom'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[submenu_background_bottom]" value="1" id="site20" <?php echo $checked_submenu_background_bottom_1; ?> >
                <label for="site20"><i class="fa fa-globe"></i> on</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[submenu_background_bottom]" value="2" id="site40" <?php echo $checked_submenu_background_bottom_2; ?> >
                <label for="site40"><i class="fa fa-trash-o"></i> off</label>
              </div>
            </div>
          </div>
        </div>
     </div>
<div class="clearfix"></div>
   <?php if( $options['submenu_background_bottom'] == 1 ){ ?>
<div class="col-lg-12">
    <?php
            if( empty($options['submenu_background_source']) ){
         echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-submenu-background"/><input type="hidden" id="submenu-background-picture" name="theme_options[submenu_background_source]" value=""/>';
    }else{
         echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-submenu-background"/><input type="hidden" id="submenu-background-picture" name="theme_options[submenu_background_source]" value="'.$options['submenu_background_source'].'"/><input type="button" class="button button-secondary" value="Remove" id="remove-submenu-background"/>';
    }
        ?>
    <div class="image-container">
    <div id="submenu-background-picture-preview" class="profile-picture" style="background-image: url(<?php print $options['submenu_background_source']; ?>); height:500px; width:100%; background-size: cover;"><?php if($options['the_submenu_same_color_of_header'] == 1){ ?>
            <div id="main_color_preview_generals" style="background-image: linear-gradient(to bottom, <?php echo $options['submenu_background_color_1']; ?>, <?php echo $options['submenu_background_color_2']; ?>); height:100%; width:100%;"></div>
        <?php
        } ?></div>
    </div>

    <div class="col-lg-6">
    <p>The Same Color Of Header</p>
    </div>
 <div class="col-lg-6">
    <?php 
    $checked_the_submenu_same_color_of_header_1 = ( @$options['the_submenu_same_color_of_header'] == 1 ? 'checked' : ''); 
    $checked_the_submenu_same_color_of_header_2 = ( @$options['the_submenu_same_color_of_header'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[the_submenu_same_color_of_header]" value="1" id="site21" <?php echo $checked_the_submenu_same_color_of_header_1; ?> >
                <label for="site21"><i class="fa fa-globe"></i> Yes</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[the_submenu_same_color_of_header]" value="2" id="site41" <?php echo $checked_the_submenu_same_color_of_header_2; ?> >
                <label for="site41"><i class="fa fa-trash-o"></i> No</label>
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
                                <!-- width of submenu -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    Width Of Submenu
    </div>
    <div class="col-lg-6 background_input">
        <input class="small_input" type="number" value="<?php echo $options['width_of_submenu']; ?>" name="theme_options[width_of_submenu]"/> px
    </div>
</div>
<div class="clearfix"></div>
                                <!-- submenu padding -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    Submenu Padding
    </div>
    <div class="col-lg-6 background_input">
		<p>Top & Bottom</p>
        <input class="small_input" type="number" value="<?php echo $options['submenu_padding_top']; ?>" name="theme_options[submenu_padding_top]"/> px
		<p>Left & Right</p>
        <input class="small_input" type="number" value="<?php echo $options['submenu_padding_left']; ?>" name="theme_options[submenu_padding_left]"/> px
    </div>
</div>
<div class="clearfix"></div>
                                <!-- submenu font color -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
     <p>Submenu Font Color</p>
    </div>

    <div class="col-lg-6 ">
        <input  type="text" name="theme_options[submenu_font_color]" value="<?php echo $options['submenu_font_color']; ?>" class="color-picker" data-alpha="true" />
    </div>
</div>

<div class="clearfix"></div>
                                <!-- submenu font size -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    Submenu Font Size
    </div>
    <div class="col-lg-6 background_input">
        <input class="small_input" type="number" value="<?php echo $options['submenu_font_size']; ?>" name="theme_options[submenu_font_size]"/> px
    </div>
</div>
<div class="clearfix"></div>
                                <!-- submenu Font Weight -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
        Submenu Font Weight
    </div>
    <div class="col-lg-6">
    <select class="form-control input-lg" name="theme_options[submenu_Font_Weight]">
    <?php 
        $selected = '';
        if ($options['submenu_Font_Weight'] == '100') $submenu_Font_Weight = ' selected="selected"';
        if ($options['submenu_Font_Weight'] == '200') $submenu_Font_Weight_1 = ' selected="selected"';
        if ($options['submenu_Font_Weight'] == '300') $submenu_Font_Weight_2 = ' selected="selected"';
        if ($options['submenu_Font_Weight'] == '400') $submenu_Font_Weight_3 = ' selected="selected"';
        if ($options['submenu_Font_Weight'] == '500') $submenu_Font_Weight_4 = ' selected="selected"';
        if ($options['submenu_Font_Weight'] == '600') $submenu_Font_Weight_5 = ' selected="selected"';
        if ($options['submenu_Font_Weight'] == '700') $submenu_Font_Weight_6 = ' selected="selected"';
        if ($options['submenu_Font_Weight'] == '800') $submenu_Font_Weight_7 = ' selected="selected"';
        if ($options['submenu_Font_Weight'] == '900') $submenu_Font_Weight_8 = ' selected="selected"';
    ?>
        <option value="100" <?php echo $submenu_Font_Weight ?>>100</option>
        <option value="200" <?php echo $submenu_Font_Weight_1 ?>>200</option>
        <option value="300" <?php echo $submenu_Font_Weight_2 ?>>300</option>
        <option value="400" <?php echo $submenu_Font_Weight_3 ?>>400</option>
        <option value="500" <?php echo $submenu_Font_Weight_4 ?>>500</option>
        <option value="600" <?php echo $submenu_Font_Weight_5 ?>>600</option>
        <option value="700" <?php echo $submenu_Font_Weight_6 ?>>700</option>
        <option value="800" <?php echo $submenu_Font_Weight_7 ?>>800</option>
        <option value="900" <?php echo $submenu_Font_Weight_8 ?>>900</option>
    </select>
    </div>
</div>

<div class="clearfix"></div>
<h1>Submenu >> Submenu</h1>
                                <!-- Submenu >> Submenu -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
    	Position
    </div>
    <div class="col-lg-6 background_input">
		<p>Left</p>
        <input class="small_input" type="number" value="<?php echo $options['Submenu_Submenu_position_left']; ?>" name="theme_options[Submenu_Submenu_position_left]"/> px
		<p>Right</p>
        <input class="small_input" type="number" value="<?php echo $options['Submenu_Submenu_position_right']; ?>" name="theme_options[Submenu_Submenu_position_right]"/> px
    </div>
</div>
<div class="clearfix"></div>