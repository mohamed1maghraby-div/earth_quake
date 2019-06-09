<h1>Social Media Box</h1>
						<!-- quake socail media box -->
   <div class="clearfix"></div>
<div class="col-lg-6">
 <p>Quake Socail Media Box</p>
</div>
 <div class="col-lg-6">
    <?php $quake_socail_media_box_1 = ( @$options['quake_socail_media_box'] == 1 ? 'checked' : ''); 
    $quake_socail_media_box_2 = ( @$options['quake_socail_media_box'] == 2 ? 'checked' : '');?>
       <div class="form-group">
          <div class="input-group" role="group">
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[quake_socail_media_box]" value="1" id="site70" <?php echo $quake_socail_media_box_1; ?> >
                <label for="site70"><i class="fa fa-globe"></i> on</label>
              </div>
            </div>
            <div class="input-group-radio">
              <div class="radio-btn radio-btn-primary">
                <input type="radio" name="theme_options[quake_socail_media_box]" value="2" id="site71" <?php echo $quake_socail_media_box_2; ?> >
                <label for="site71"><i class="fa fa-trash-o"></i> off</label>
              </div>
            </div>
          </div>
        </div>
     </div>
<div class="clearfix"></div>
<?php if($options['quake_socail_media_box'] == 1){ ?>
                                <!-- quake facebook link -->
    <div class="col-lg-6">
Facebook Link
</div>
    <div class="col-lg-6 background_input">
        <input type="text" value="<?php echo $options['quake_facebook_link']; ?>" name="theme_options[quake_facebook_link]"/>
    </div>
<div class="clearfix"></div>
                                <!-- quake twitter link -->
    <div class="col-lg-6">
Twitter Link
</div>
    <div class="col-lg-6 background_input">
        <input type="text" value="<?php echo $options['quake_twitter_link']; ?>" name="theme_options[quake_twitter_link]"/>
    </div>
<div class="clearfix"></div>
                                <!-- quake youtube link -->
    <div class="col-lg-6">
Youtube Link
</div>
    <div class="col-lg-6 background_input">
        <input type="text" value="<?php echo $options['quake_youtube_link']; ?>" name="theme_options[quake_youtube_link]"/>
    </div>
<div class="clearfix"></div>
                                <!-- quake gp+ link -->
    <div class="col-lg-6">
gp+ Link
</div>
    <div class="col-lg-6 background_input">
        <input type="text" value="<?php echo $options['quake_gp_link']; ?>" name="theme_options[quake_gp_link]"/>
    </div>
<div class="clearfix"></div>
<?php } ?>
