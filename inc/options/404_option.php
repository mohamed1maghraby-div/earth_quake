<h1>404 Page</h1>
								<!-- 404_h1 -->
<div class="col-lg-6">
   404 >> H1
</div>
    <div class="col-lg-6 background_input">
        <input type="text" value="<?php echo $options['404_h1']; ?>" name="theme_options[404_h1]"/>
    </div>
<div class="clearfix"></div>
                            <!-- 404_h1_font_size -->
<div class="col-lg-6">
    404 >> H1 Font Size
</div>
<div class="col-lg-6 background_input">
    <input type="number" value="<?php echo $options['404_h1_font_size']; ?>" name="theme_options[404_h1_font_size]"/> Px
</div>
<div class="clearfix"></div>
                                <!-- 404_h3 -->
<div class="col-lg-6">
   404 >> H3
</div>
    <div class="col-lg-6 background_input">
        <input type="text" value="<?php echo $options['404_h3']; ?>" name="theme_options[404_h3]"/>
    </div>
<div class="clearfix"></div>
                            <!-- 404_h3_font_size -->
<div class="col-lg-6">
    404 >> H3 Font Size
</div>
<div class="col-lg-6 background_input">
    <input type="number" value="<?php echo $options['404_h3_font_size']; ?>" name="theme_options[404_h3_font_size]"/> Px
</div>
<div class="clearfix"></div>
                                <!-- 404_p -->
<div class="col-lg-6">
   404 >> Paragraph
</div>
    <div class="col-lg-6 background_input">
        <input type="text" value="<?php echo $options['404_p']; ?>" name="theme_options[404_p]"/>
    </div>
<div class="clearfix"></div>
                            <!-- 404_p_font_size -->
<div class="col-lg-6">
    404 >> Paragraph Font Size
</div>
<div class="col-lg-6 background_input">
    <input type="number" value="<?php echo $options['404_p_font_size']; ?>" name="theme_options[404_p_font_size]"/> Px
</div>
<div class="clearfix"></div>
                                <!-- 404_sidebar -->
   <div class="clearfix"></div>
<div class="col-lg-6">
 <p>404 >> Sidebar</p>
</div>
 <div class="col-lg-6">
    <?php $not_found_sidebar_1 = ( @$options['404_sidebar'] == 1 ? 'checked' : ''); 
    $not_found_sidebar_2 = ( @$options['404_sidebar'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[404_sidebar]" value="1" id="site72" <?php echo $not_found_sidebar_1; ?> >
                <label for="site72"><i class="fa fa-globe"></i> on</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[404_sidebar]" value="2" id="site73" <?php echo $not_found_sidebar_2; ?> >
                <label for="site73"><i class="fa fa-trash-o"></i> off</label>
              </div>
            </div>
          </div>
        </div>
     </div>