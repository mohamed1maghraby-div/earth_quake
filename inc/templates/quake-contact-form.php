<h1>Quake Contact Form</h1>
<?php settings_errors(); ?>
<p>Use this <strong>shortcode</strong> to activate the Contact For, inside a Page or a Post</p>
<p><code>[contact_form]</code></p>

<form method="post" action="options.php" class="quake-general-form">
    <?php  settings_fields('quake-contact-options'); ?>
    <?php  do_settings_sections('earth_quake_theme_contact'); ?>
    <?php  submit_button(); ?>
</form>