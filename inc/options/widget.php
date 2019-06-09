<h1>Title Of Widget</h1>
                                <!-- widget background Color -->
<div class="clearfix"></div> 
<div class="col-lg-6">
 <p>Widget >> Background Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[widget_background_color]" value="<?php echo $options['widget_background_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                            <!-- widget h2 padding top -->
<div class="col-lg-6">
        Title >> Padding Top
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['widget_h2_padding_top']; ?>" name="theme_options[widget_h2_padding_top]"/> Px
</div>
<div class="clearfix"></div> 
                            <!-- widget h2 padding left -->
<div class="col-lg-6">
        Title >> Padding Left
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['widget_h2_padding_left']; ?>" name="theme_options[widget_h2_padding_left]"/> Px
</div>
<div class="clearfix"></div> 
                            <!-- widget h2 padding bottom -->
<div class="col-lg-6">
        Title >> Padding Bottom
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['widget_h2_padding_bottom']; ?>" name="theme_options[widget_h2_padding_bottom]"/> Px
</div>
<div class="clearfix"></div> 
                            <!-- widget h2 font color -->
<div class="col-lg-6">
 <p>Title >> Font Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[widget_h2_font_color]" value="<?php echo $options['widget_h2_font_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                <!-- widget h2 font size -->
<div class="col-lg-6">
        Title >> Font Size
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['widget_h2_font_size']; ?>" name="theme_options[widget_h2_font_size]"/> Px
</div>
<div class="clearfix"></div> 
                                <!-- widget h2 font weight -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
        Title >> Font Weight
    </div>
    <div class="col-lg-6">
    <select class="form-control input-lg" name="theme_options[widget_h2_font_weight]">
    <?php 
        if ($options['widget_h2_font_weight'] == '100') $widget_h2_font_weight = ' selected="selected"';
        if ($options['widget_h2_font_weight'] == '200') $widget_h2_font_weight_1 = ' selected="selected"';
        if ($options['widget_h2_font_weight'] == '300') $widget_h2_font_weight_2 = ' selected="selected"';
        if ($options['widget_h2_font_weight'] == '400') $widget_h2_font_weight_3 = ' selected="selected"';
        if ($options['widget_h2_font_weight'] == '500') $widget_h2_font_weight_4 = ' selected="selected"';
        if ($options['widget_h2_font_weight'] == '600') $widget_h2_font_weight_5 = ' selected="selected"';
        if ($options['widget_h2_font_weight'] == '700') $widget_h2_font_weight_6 = ' selected="selected"';
        if ($options['widget_h2_font_weight'] == '800') $widget_h2_font_weight_7 = ' selected="selected"';
        if ($options['widget_h2_font_weight'] == '900') $widget_h2_font_weight_8 = ' selected="selected"';
    ?>
        <option value="100" <?php echo $widget_h2_font_weight ?>>100</option>
        <option value="200" <?php echo $widget_h2_font_weight_1 ?>>200</option>
        <option value="300" <?php echo $widget_h2_font_weight_2 ?>>300</option>
        <option value="400" <?php echo $widget_h2_font_weight_3 ?>>400</option>
        <option value="500" <?php echo $widget_h2_font_weight_4 ?>>500</option>
        <option value="600" <?php echo $widget_h2_font_weight_5 ?>>600</option>
        <option value="700" <?php echo $widget_h2_font_weight_6 ?>>700</option>
        <option value="800" <?php echo $widget_h2_font_weight_7 ?>>800</option>
        <option value="900" <?php echo $widget_h2_font_weight_8 ?>>900</option>
    </select>
    </div>
</div>
<div class="clearfix"></div> 
                                <!-- widget h2 width -->
<div class="col-lg-6">
        Title >> width
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['widget_h2_width']; ?>" name="theme_options[widget_h2_width]" max="100" min="1"/> %
</div>
<div class="clearfix"></div> 
                                <!-- widget search width -->
<div class="col-lg-6">
        Search >> Width
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['widget_search_width']; ?>" name="theme_options[widget_search_width]" max="100" min="1"/> %
</div>
<div class="clearfix"></div> 
                                <!-- widget a -->
<div class="col-lg-6">
 <p>Link font color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[widget_a_link_color]" value="<?php echo $options['widget_a_link_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                <!-- widget a:hover -->
<div class="col-lg-6">
 <p>Link Hover font color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[widget_a_hover_link_color]" value="<?php echo $options['widget_a_hover_link_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 

                                <!-- widget a:hover -->
<div class="col-lg-6">
<p>Paragraph Font Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[widget_P_color]" value="<?php echo $options['widget_P_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 

<h1>Widgets Subscribe Us & Connect With Us</h1>
                                    <!-- input color -->
<div class="col-lg-6">
 <p>Input Background Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[widget_input_color]" value="<?php echo $options['widget_input_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>   
                                    <!-- input font color -->
<div class="col-lg-6">
 <p>Input Font Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[widget_input_font_color]" value="<?php echo $options['widget_input_font_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>  
                                    <!-- button color -->
<div class="col-lg-6">
 <p>Button Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[widget_button_color]" value="<?php echo $options['widget_button_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                        <!-- button font color -->
<div class="col-lg-6">
 <p>Button Font Color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[widget_button_font_color]" value="<?php echo $options['widget_button_font_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 
                                <!-- button padding top -->
<div class="col-lg-6">
        Button Padding Top & Bottom
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['widget_input_button_padding_top']; ?>" name="theme_options[widget_input_button_padding_top]" max="100" min="1"/> Px
</div>
<div class="clearfix"></div>
                                <!-- button padding left-->
<div class="col-lg-6">
        Button Padding Left & Right
    </div>
<div class="col-lg-6 background_input">
    <input class="small_input" type="number" value="<?php echo $options['widget_input_button_padding_left']; ?>" name="theme_options[widget_input_button_padding_left]" max="100" min="1"/> Px
</div>
<div class="clearfix"></div>
<h1>Show / Hide Sidebar MediaQuery (Responsive Design)</h1>
                                    <!-- Show / Hide Sidebar Color -->
<div class="col-lg-6">
 <p>Show / Hide Sidebar Color Button</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[show_hide_sidebar_color]" value="<?php echo $options['show_hide_sidebar_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>   
                                    <!-- Show / Hide Sidebar Color hover -->
<div class="col-lg-6">
 <p>Show / Hide Sidebar Color Button Hover</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[show_hide_sidebar_color_hover]" value="<?php echo $options['show_hide_sidebar_color_hover']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>  
                                <!-- button padding left-->
<div class="col-lg-6">
        Show / Hide Sidebar Padding Button
    </div>
<div class="col-lg-6 background_input">
	<p>Top & Bottom</p>
    <input class="small_input" type="number" value="<?php echo $options['show_hide_sidebar_padding_top']; ?>" name="theme_options[show_hide_sidebar_padding_top]" /> Px
	<p>Left & Right</p>
    <input class="small_input" type="number" value="<?php echo $options['show_hide_sidebar_padding_left']; ?>" name="theme_options[show_hide_sidebar_padding_left]" max="100" min="1"/> %
</div>
<div class="clearfix"></div>