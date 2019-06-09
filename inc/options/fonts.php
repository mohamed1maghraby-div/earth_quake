<h1>Fonts</h1>
<div class="clearfix"></div> 
								<!-- body p font -->
    <div class="col-lg-6">
        Body >> Paragraph Font Family
    </div>
    <div class="col-lg-6">
    <select class="form-control formcontrolpad input-lg" name="theme_options[body_p_font]">
    <?php 
        if ($options['body_p_font'] == 'sans-serif') $font_sans_serif = ' selected="selected"';
        if ($options['body_p_font'] == 'Permanent Marker') $font_permanent_marker = ' selected="selected"';
		if ($options['body_p_font'] == 'Play') $font_play = ' selected="selected"';
		if ($options['body_p_font'] == 'Libre Baskerville') $font_libre_baskerville = ' selected="selected"';
        if ($options['body_p_font'] == 'Russo One') $font_russo_one = ' selected="selected"';
        if ($options['body_p_font'] == 'Chewy') $font_chewy = ' selected="selected"';
        if ($options['body_p_font'] == 'Audiowide') $font_audiowide = ' selected="selected"';
        if ($options['body_p_font'] == 'Dancing Script') $font_dancing_script = ' selected="selected"';
    ?>
        <option value="sans-serif" <?php echo $font_sans_serif ?>>sans-serif</option>
        <option value="Permanent Marker" <?php echo $font_permanent_marker ?>>Permanent Marker</option>
        <option value="Play" <?php echo $font_play ?>>Play</option>
        <option value="Libre Baskerville" <?php echo $font_libre_baskerville ?>>Libre Baskerville</option>
        <option value="Russo One" <?php echo $font_russo_one ?>>Russo One</option>
		<option value="Chewy" <?php echo $font_chewy ?>>Chewy</option>
		<option value="Audiowide" <?php echo $font_audiowide ?>>Audiowide</option>
		<option value="Dancing Script" <?php echo $font_dancing_script ?>>Dancing Script</option>
    </select>
    </div>
<div class="clearfix"></div>
								<!-- body a font -->
    <div class="col-lg-6">
        Body >> Link Font Family
    </div>
    <div class="col-lg-6">
    <select class="form-control formcontrolpad input-lg" name="theme_options[body_a_font]">
    <?php 
        if ($options['body_a_font'] == 'sans-serif') $font_a_sans_serif = ' selected="selected"';
        if ($options['body_a_font'] == 'Permanent Marker') $font_a_permanent_marker = ' selected="selected"';
		if ($options['body_a_font'] == 'Play') $font_a_play = ' selected="selected"';
		if ($options['body_a_font'] == 'Libre Baskerville') $font_libre_baskerville = ' selected="selected"';
        if ($options['body_a_font'] == 'Russo One') $font_a_russo_one = ' selected="selected"';
        if ($options['body_a_font'] == 'Chewy') $font_a_chewy = ' selected="selected"';
        if ($options['body_a_font'] == 'Audiowide') $font_a_audiowide = ' selected="selected"';
        if ($options['body_a_font'] == 'Dancing Script') $font_a_dancing_script = ' selected="selected"';
    ?>
        <option value="sans-serif" <?php echo $font_a_sans_serif ?>>sans-serif</option>
        <option value="Permanent Marker" <?php echo $font_a_permanent_marker ?>>Permanent Marker</option>
        <option value="Play" <?php echo $font_a_play ?>>Play</option>
        <option value="Libre Baskerville" <?php echo $font_libre_baskerville ?>>Libre Baskerville</option>
        <option value="Russo One" <?php echo $font_a_russo_one ?>>Russo One</option>
		<option value="Chewy" <?php echo $font_a_chewy ?>>Chewy</option>
		<option value="Audiowide" <?php echo $font_a_audiowide ?>>Audiowide</option>
		<option value="Dancing Script" <?php echo $font_a_dancing_script ?>>Dancing Script</option>
    </select>
    </div>
<div class="clearfix"></div>
								<!-- body h1 font -->
    <div class="col-lg-6">
        H1 >> Font Family
    </div>
    <div class="col-lg-6">
    <select class="form-control formcontrolpad input-lg" name="theme_options[body_h1_font]">
    <?php 
        if ($options['body_h1_font'] == 'sans-serif') $font_h1_sans_serif = ' selected="selected"';
        if ($options['body_h1_font'] == 'Permanent Marker') $font_h1_permanent_marker = ' selected="selected"';
		if ($options['body_h1_font'] == 'Play') $font_h1_play = ' selected="selected"';
		if ($options['body_h1_font'] == 'Libre Baskerville') $font_h1_libre_baskerville = ' selected="selected"';
        if ($options['body_h1_font'] == 'Russo One') $font_h1_russo_one = ' selected="selected"';
        if ($options['body_h1_font'] == 'Chewy') $font_h1_chewy = ' selected="selected"';
        if ($options['body_h1_font'] == 'Audiowide') $font_h1_audiowide = ' selected="selected"';
        if ($options['body_h1_font'] == 'Dancing Script') $font_h1_dancing_script = ' selected="selected"';
    ?>
        <option value="sans-serif" <?php echo $font_h1_sans_serif ?>>sans-serif</option>
        <option value="Permanent Marker" <?php echo $font_h1_permanent_marker ?>>Permanent Marker</option>
        <option value="Play" <?php echo $font_h1_play ?>>Play</option>
        <option value="Libre Baskerville" <?php echo $font_h1_libre_baskerville ?>>Libre Baskerville</option>
        <option value="Russo One" <?php echo $font_h1_russo_one ?>>Russo One</option>
		<option value="Chewy" <?php echo $font_h1_chewy ?>>Chewy</option>
		<option value="Audiowide" <?php echo $font_h1_audiowide ?>>Audiowide</option>
		<option value="Dancing Script" <?php echo $font_h1_dancing_script ?>>Dancing Script</option>
    </select>
    </div>
<div class="clearfix"></div>
								<!-- body h2 font -->
    <div class="col-lg-6">
        H2 >> Font Family
    </div>
    <div class="col-lg-6">
    <select class="form-control formcontrolpad input-lg" name="theme_options[body_h2_font]">
    <?php 
        if ($options['body_h2_font'] == 'sans-serif') $font_h2_sans_serif = ' selected="selected"';
        if ($options['body_h2_font'] == 'Permanent Marker') $font_h2_permanent_marker = ' selected="selected"';
		if ($options['body_h2_font'] == 'Play') $font_h2_play = ' selected="selected"';
		if ($options['body_h2_font'] == 'Libre Baskerville') $font_h2_libre_baskerville = ' selected="selected"';
        if ($options['body_h2_font'] == 'Russo One') $font_h2_russo_one = ' selected="selected"';
        if ($options['body_h2_font'] == 'Chewy') $font_h2_chewy = ' selected="selected"';
        if ($options['body_h2_font'] == 'Audiowide') $font_h2_audiowide = ' selected="selected"';
        if ($options['body_h2_font'] == 'Dancing Script') $font_h2_dancing_script = ' selected="selected"';
    ?>
        <option value="sans-serif" <?php echo $font_h2_sans_serif ?>>sans-serif</option>
        <option value="Permanent Marker" <?php echo $font_h2_permanent_marker ?>>Permanent Marker</option>
        <option value="Play" <?php echo $font_h2_play ?>>Play</option>
        <option value="Libre Baskerville" <?php echo $font_h2_libre_baskerville ?>>Libre Baskerville</option>
        <option value="Russo One" <?php echo $font_h2_russo_one ?>>Russo One</option>
		<option value="Chewy" <?php echo $font_h2_chewy ?>>Chewy</option>
		<option value="Audiowide" <?php echo $font_h2_audiowide ?>>Audiowide</option>
		<option value="Dancing Script" <?php echo $font_h2_dancing_script ?>>Dancing Script</option>
    </select>
    </div>
<div class="clearfix"></div>
								<!-- body h3 font -->
    <div class="col-lg-6">
        H3 >> Font Family
    </div>
    <div class="col-lg-6">
    <select class="form-control formcontrolpad input-lg" name="theme_options[body_h3_font]">
    <?php 
        if ($options['body_h3_font'] == 'sans-serif') $font_h3_sans_serif = ' selected="selected"';
        if ($options['body_h3_font'] == 'Permanent Marker') $font_h3_permanent_marker = ' selected="selected"';
		if ($options['body_h3_font'] == 'Play') $font_h3_play = ' selected="selected"';
		if ($options['body_h3_font'] == 'Libre Baskerville') $font_h3_libre_baskerville = ' selected="selected"';
        if ($options['body_h3_font'] == 'Russo One') $font_h3_russo_one = ' selected="selected"';
        if ($options['body_h3_font'] == 'Chewy') $font_h3_chewy = ' selected="selected"';
        if ($options['body_h3_font'] == 'Audiowide') $font_h3_audiowide = ' selected="selected"';
        if ($options['body_h3_font'] == 'Dancing Script') $font_h3_dancing_script = ' selected="selected"';
    ?>
        <option value="sans-serif" <?php echo $font_h3_sans_serif ?>>sans-serif</option>
        <option value="Permanent Marker" <?php echo $font_h3_permanent_marker ?>>Permanent Marker</option>
        <option value="Play" <?php echo $font_h3_play ?>>Play</option>
        <option value="Libre Baskerville" <?php echo $font_h3_libre_baskerville ?>>Libre Baskerville</option>
        <option value="Russo One" <?php echo $font_h3_russo_one ?>>Russo One</option>
		<option value="Chewy" <?php echo $font_h3_chewy ?>>Chewy</option>
		<option value="Audiowide" <?php echo $font_h3_audiowide ?>>Audiowide</option>
		<option value="Dancing Script" <?php echo $font_h3_dancing_script ?>>Dancing Script</option>
    </select>
    </div>
<div class="clearfix"></div>