<div class="Genral_Settings">
    <h1>General Settings</h1>
    <div class="col-lg-6">
        <p>LTR mode</p>
		
    </div>
    <div class="col-lg-6">
        <?php $checked_1 = ( @$options['rtl_mode'] == 'ltr' ? 'checked' : ''); 
        $checked_2 = ( @$options['rtl_mode'] == 'rtl' ? 'checked' : '');?>
        <div class="form-group">
            <div class="input-group" role="group">
                <div class="input-group-radio">
                    <div class="radio-btn radio-btn-primary">
                        <input type="radio" name="theme_options[rtl_mode]" value="ltr" id="site11" <?php echo $checked_1; ?> >
                        <label for="site11"><i class="fa fa-globe"></i> ltr</label>
                    </div>
                </div>
                <div class="input-group-radio">
                    <div class="radio-btn radio-btn-primary">
                        <input type="radio" name="theme_options[rtl_mode]" value="rtl" id="site31" <?php echo $checked_2; ?> >
                        <label for="site31"><i class="fa fa-trash-o"></i> rtl</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-lg-6">
    <p>Favicon</p>
    </div>
    <div class="col-lg-6">
		<a href="./customize.php?return=%2Fearth_quake%2Fwp-admin%2Fadmin.php%3Fpage%3Dearth_quake_general_information">this page</a>  >> Site Identity
    </div>
	<div class="clearfix"></div>
	<div class="col-lg-6">
		Show Title of blog
	</div>
    <div class="col-lg-6 background_input">
        <input type="text" value="<?php echo $options['Show_Title_of_blog']; ?>" name="theme_options[Show_Title_of_blog]"/>
    </div>
</div>
<div class="clearfix"></div>
<div class="custom_html">
    <h1><span class="quake_change_1 glyphicon glyphicon-minus" aria-hidden="true"></span>Put Your Custom HTML</h1>
    <div class="custom_click col-lg-push-2 col-lg-8">
        <div id="customHtml" ><?php echo $custom_Html; ?></div>
        <textarea  id="quake_html" name="quake_html" style="display:none;visibility:hidden;width: 50%;">
        <?php echo $custom_Html; ?></textarea>
    </div>
</div>
<div class="clearfix"></div>
<div class="custom_css">
    <h1><span class="quake_change_2 glyphicon glyphicon-plus" aria-hidden="true"></span>Put Your Custom CSS</h1>
    <div class="col-lg-push-2 col-lg-8" id="customCss" ><?php echo $custom_Css; ?></div><textarea  id="quake_css" name="quake_css" style="display:none;visibility:hidden;width: 50%;">
    <?php echo $custom_Css; ?></textarea>
</div>
<div class="clearfix"></div>
<div class="custom_js">
    <h1><span class="quake_change_3 glyphicon glyphicon-plus" aria-hidden="true"></span>Put Your Custom JS</h1>
    <div class="col-lg-push-2 col-lg-8" id="customJs" ><?php echo $custom_Js; ?></div><textarea  id="quake_js" name="quake_js" style="display:none;visibility:hidden;width: 50%;">
    <?php echo $custom_Js; ?></textarea>
 </div>
                             
 