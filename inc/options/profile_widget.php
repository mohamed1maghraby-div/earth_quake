<h1>Profile Widget</h1>
							<!-- circle color 1 -->
<div class="col-lg-6">
 <p>Circle >> Color 1</p>
</div>

<div class="col-lg-6 ">
    <input  type="text" name="theme_options[circle_color_1]" value="<?php echo $options['circle_color_1']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>
                                <!-- circle color 2 -->
<div class="col-lg-6">
 <p>Circle >> Color 2</p>
</div>

<div class="col-lg-6 ">
    <input  type="text" name="theme_options[circle_color_2]" value="<?php echo $options['circle_color_2']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>
                                <!-- image color  -->
<div class="col-lg-6">
 <p>Circle >> Image Color</p>
</div>

<div class="col-lg-6 ">
    <input  type="text" name="theme_options[image_color_for_circle]" value="<?php echo $options['image_color_for_circle']; ?>" class="color-picker" data-alpha="true" />
</div>
<div class="clearfix"></div>
                                <!-- full name font size -->
<div class="col-lg-6">
    Circle >> Full Name Font Size
</div>
<div class="col-lg-6 background_input">
    <input type="number" value="<?php echo $options['full_name_font_size']; ?>" name="theme_options[full_name_font_size]"/> Px
</div>
<div class="clearfix"></div>
                                <!-- full name font weight -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
        Circle >> Full Name Font Weight
    </div>
    <div class="col-lg-6">
    <select class="form-control input-lg" name="theme_options[full_name_font_weight]">
    <?php 
        $selected = '';
        if ($options['full_name_font_weight'] == '100') $full_name_font_weight = ' selected="selected"';
        if ($options['full_name_font_weight'] == '200') $full_name_font_weight_1 = ' selected="selected"';
        if ($options['full_name_font_weight'] == '300') $full_name_font_weight_2 = ' selected="selected"';
        if ($options['full_name_font_weight'] == '400') $full_name_font_weight_3 = ' selected="selected"';
        if ($options['full_name_font_weight'] == '500') $full_name_font_weight_4 = ' selected="selected"';
        if ($options['full_name_font_weight'] == '600') $full_name_font_weight_5 = ' selected="selected"';
        if ($options['full_name_font_weight'] == '700') $full_name_font_weight_6 = ' selected="selected"';
        if ($options['full_name_font_weight'] == '800') $full_name_font_weight_7 = ' selected="selected"';
        if ($options['full_name_font_weight'] == '900') $full_name_font_weight_8 = ' selected="selected"';
    ?>
        <option value="100" <?php echo $full_name_font_weight ?>>100</option>
        <option value="200" <?php echo $full_name_font_weight_1 ?>>200</option>
        <option value="300" <?php echo $full_name_font_weight_2 ?>>300</option>
        <option value="400" <?php echo $full_name_font_weight_3 ?>>400</option>
        <option value="500" <?php echo $full_name_font_weight_4 ?>>500</option>
        <option value="600" <?php echo $full_name_font_weight_5 ?>>600</option>
        <option value="700" <?php echo $full_name_font_weight_6 ?>>700</option>
        <option value="800" <?php echo $full_name_font_weight_7 ?>>800</option>
        <option value="900" <?php echo $full_name_font_weight_8 ?>>900</option>
    </select>
    </div>
</div>
<div class="clearfix"></div>
                                <!-- description font size -->
<div class="col-lg-6">
    Circle >> Description Font Size
</div>
<div class="col-lg-6 background_input">
    <input type="number" value="<?php echo $options['description_font_size']; ?>" name="theme_options[description_font_size]"/> Px
</div>
<div class="clearfix"></div>
                                <!-- description font weight -->
<div class="the_same_color_of_header">
    <div class="col-lg-6">
        Circle >> Description Font Weight
    </div>
    <div class="col-lg-6">
    <select class="form-control input-lg" name="theme_options[description_font_weight]">
    <?php 
        $selected = '';
        if ($options['description_font_weight'] == '100') $description_font_weight = ' selected="selected"';
        if ($options['description_font_weight'] == '200') $description_font_weight_1 = ' selected="selected"';
        if ($options['description_font_weight'] == '300') $description_font_weight_2 = ' selected="selected"';
        if ($options['description_font_weight'] == '400') $description_font_weight_3 = ' selected="selected"';
        if ($options['description_font_weight'] == '500') $description_font_weight_4 = ' selected="selected"';
        if ($options['description_font_weight'] == '600') $description_font_weight_5 = ' selected="selected"';
        if ($options['description_font_weight'] == '700') $description_font_weight_6 = ' selected="selected"';
        if ($options['description_font_weight'] == '800') $description_font_weight_7 = ' selected="selected"';
        if ($options['description_font_weight'] == '900') $description_font_weight_8 = ' selected="selected"';
    ?>
        <option value="100" <?php echo $description_font_weight ?>>100</option>
        <option value="200" <?php echo $description_font_weight_1 ?>>200</option>
        <option value="300" <?php echo $description_font_weight_2 ?>>300</option>
        <option value="400" <?php echo $description_font_weight_3 ?>>400</option>
        <option value="500" <?php echo $description_font_weight_4 ?>>500</option>
        <option value="600" <?php echo $description_font_weight_5 ?>>600</option>
        <option value="700" <?php echo $description_font_weight_6 ?>>700</option>
        <option value="800" <?php echo $description_font_weight_7 ?>>800</option>
        <option value="900" <?php echo $description_font_weight_8 ?>>900</option>
    </select>
    </div>
</div>
<div class="clearfix"></div>