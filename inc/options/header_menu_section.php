<h1>Menu</h1>
                            <!-- Header Style -->
<div class="col-lg-6">
	<p>Header Style</p>
</div>
<div class="col-lg-6">
<?php $checked_header_style_1 = ( @$options['header_style'] == 1 ? 'checked' : ''); 
$checked_header_style_2 = ( @$options['header_style'] == 2 ? 'checked' : '');?>
	<div class="form-group">
	  <div class="input-group" role="group">
		<div class="input-group-radio">
		  <div class="radio-btn radio-btn-primary">
			<input type="radio" name="theme_options[header_style]" value="1" id="site17" <?php echo $checked_header_style_1; ?> >
			<label for="site17">Horizontal Menu</label>
		  </div>
		</div>
		<div class="input-group-radio">
		  <div class="radio-btn radio-btn-primary">
			<input type="radio" name="theme_options[header_style]" value="2" id="site37" <?php echo $checked_header_style_2; ?> >
			<label for="site37">Vertical Menu</label>
		  </div>
		</div>
	  </div>
	</div>
</div>
<div class="clearfix"></div>
 