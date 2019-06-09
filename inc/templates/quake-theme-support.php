<h1>Quake Theme Support</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php" class="quake-general-form">
<?php  settings_fields('quake-theme-support'); ?>
    <?php  do_settings_sections('earth_quake_theme'); ?>
    <?php  submit_button(); ?>
</form>