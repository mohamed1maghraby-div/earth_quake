<h1>Quake Theme Options</h1>
<?php settings_errors(); ?>
<?php 
    $picture =esc_attr( get_option( 'profile_picture' ) );
    $firstName =esc_attr( get_option( 'first_name' ) );
    $lastName =esc_attr( get_option( 'last_name' ) );
    $fullName = $firstName . ' ' . $lastName;
    $description =esc_attr( get_option( 'user_description' ) );
?>

<!-- colored -->
    <div class="ih-item circle colored effect1"><a href="author">
        <div class="spinner"></div>
        <div class="img"><img src="<?php print $picture; ?>" alt="img"></div>
        <div class="info">
          <div class="info-back">
            <h3><?php print $fullName; ?></h3>
            <p><?php print $description; ?></p>
              
          </div>
        </div></a></div>
    <!-- end colored -->
<form method="post" action="options.php" class="quake-general-form">
<?php settings_fields('quake-settings-group'); ?>
    <?php do_settings_sections('earth_quake'); ?>
    <?php submit_button( 'Save Changes', 'primary', 'btnSubmit'); ?>
</form>