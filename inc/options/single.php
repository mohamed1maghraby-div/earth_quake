<h1>Single Page</h1>
<div class="clearfix"></div>
						<!-- show name of the post in page1 -->
<div class="col-lg-6">
     <p>Show Name Of The Post In Top Main Page</p>
    </div>
     <div class="col-lg-6">
        <?php $show_name_of_the_post_in_page1_1 = ( @$options['show_name_of_the_post_in_page1'] == '1' ? 'checked' : ''); 
        $show_name_of_the_post_in_page1_2 = ( @$options['show_name_of_the_post_in_page1'] == '2' ? 'checked' : '');?>
           <div class="form-group">
              <div class="input-group" role="group">
                <div class="input-group-radio">
                  <div class="radio-btn radio-btn-primary">
                    <input type="radio" name="theme_options[show_name_of_the_post_in_page1]" value="1" id="site52" <?php echo $show_name_of_the_post_in_page1_1; ?> >
                    <label for="site52"><i class="fa fa-globe"></i> on</label>
                  </div>
                </div>
                <div class="input-group-radio">
                  <div class="radio-btn radio-btn-primary">
                    <input type="radio" name="theme_options[show_name_of_the_post_in_page1]" value="2" id="site53" <?php echo $show_name_of_the_post_in_page1_2; ?> >
                    <label for="site53"><i class="fa fa-trash-o"></i> off</label>
                  </div>
                </div>
              </div>
            </div>
         </div>
                            <!-- show name of the post in single page -->
<div class="clearfix"></div>
<div class="col-lg-6">
     <p>Show Name Of The Post In Single Page</p>
    </div>
     <div class="col-lg-6">
        <?php $show_name_of_the_post_in_single_page_1 = ( @$options['show_name_of_the_post_in_single_page'] == '1' ? 'checked' : ''); 
        $show_name_of_the_post_in_single_page_2 = ( @$options['show_name_of_the_post_in_single_page'] == '2' ? 'checked' : '');?>
           <div class="form-group">
              <div class="input-group" role="group">
                <div class="input-group-radio">
                  <div class="radio-btn radio-btn-primary">
                    <input type="radio" name="theme_options[show_name_of_the_post_in_single_page]" value="1" id="site54" <?php echo $show_name_of_the_post_in_single_page_1; ?> >
                    <label for="site54"><i class="fa fa-globe"></i> on</label>
                  </div>
                </div>
                <div class="input-group-radio">
                  <div class="radio-btn radio-btn-primary">
                    <input type="radio" name="theme_options[show_name_of_the_post_in_single_page]" value="2" id="site55" <?php echo $show_name_of_the_post_in_single_page_2; ?> >
                    <label for="site55"><i class="fa fa-trash-o"></i> off</label>
                  </div>
                </div>
              </div>
            </div>
         </div>
<div class="clearfix"></div>
                                    <!-- time and category alignment -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
        Time And Category Alignment
    </div>
    <div class="col-lg-6">
    <select class="form-control input-lg" name="theme_options[time_and_category_alignment]">
    <?php 
        $selected = '';
        if ($options['time_and_category_alignment'] == 'right') $time_and_category_alignment = ' selected="selected"';
        if ($options['time_and_category_alignment'] == 'center') $time_and_category_alignment_1 = ' selected="selected"';
        if ($options['time_and_category_alignment'] == 'left') $time_and_category_alignment_2 = ' selected="selected"';
    ?>
        <option value="right" <?php echo $time_and_category_alignment ?>>right</option>
        <option value="center" <?php echo $time_and_category_alignment_1 ?>>center</option>
        <option value="left" <?php echo $time_and_category_alignment_2 ?>>left</option>
    </select>
    </div>
</div>
                                    <!-- content of post font size -->
<div class="clearfix"></div>
<div class="col-lg-6">
        Content Of Post Font Size
    </div>
    <div class="col-lg-6 background_input">
        <input class="small_input" type="number" value="<?php echo $options['content_of_post_font_size']; ?>" name="theme_options[content_of_post_font_size]"/> Px
    </div>
						<!-- content of post font weight -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
        Content Of Post Font Weight
    </div>
    <div class="col-lg-6">
    <select class="form-control input-lg" name="theme_options[content_of_post_font_weight]">
    <?php 
        $selected = '';
        if ($options['content_of_post_font_weight'] == '100') $content_of_post_font_weight = ' selected="selected"';
        if ($options['content_of_post_font_weight'] == '200') $content_of_post_font_weight_1 = ' selected="selected"';
        if ($options['content_of_post_font_weight'] == '300') $content_of_post_font_weight_2 = ' selected="selected"';
        if ($options['content_of_post_font_weight'] == '400') $content_of_post_font_weight_3 = ' selected="selected"';
        if ($options['content_of_post_font_weight'] == '500') $content_of_post_font_weight_4 = ' selected="selected"';
        if ($options['content_of_post_font_weight'] == '600') $content_of_post_font_weight_5 = ' selected="selected"';
        if ($options['content_of_post_font_weight'] == '700') $content_of_post_font_weight_6 = ' selected="selected"';
        if ($options['content_of_post_font_weight'] == '800') $content_of_post_font_weight_7 = ' selected="selected"';
        if ($options['content_of_post_font_weight'] == '900') $content_of_post_font_weight_8 = ' selected="selected"';
    ?>
        <option value="100" <?php echo $content_of_post_font_weight ?>>100</option>
        <option value="200" <?php echo $content_of_post_font_weight_1 ?>>200</option>
        <option value="300" <?php echo $content_of_post_font_weight_2 ?>>300</option>
        <option value="400" <?php echo $content_of_post_font_weight_3 ?>>400</option>
        <option value="500" <?php echo $content_of_post_font_weight_4 ?>>500</option>
        <option value="600" <?php echo $content_of_post_font_weight_5 ?>>600</option>
        <option value="700" <?php echo $content_of_post_font_weight_6 ?>>700</option>
        <option value="800" <?php echo $content_of_post_font_weight_7 ?>>800</option>
        <option value="900" <?php echo $content_of_post_font_weight_8 ?>>900</option>
    </select>
    </div>
</div>
<div class="clearfix"></div>
<h1>Comments Form</h1>
<div class="clearfix"></div>
								<!-- Comments Form color -->
<div class="col-lg-6">
 	<p>Comments >> Form color</p>
</div>
<div class="col-lg-6 ">
    <input  type="text" name="theme_options[comments_form_color]" value="<?php echo $options['comments_form_color']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div> 