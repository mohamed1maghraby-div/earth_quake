<?php 
    function quake_general_information_data(){
   $default_options_array = array(
        'quake_addess_1' => '2',
        'quakw_city_state' => '',
        'quake_country' => '',
        'quake_author_email' => '',
        'quake_phone' => '',
        'quake_fax' => ''
         );

        add_option('quake_general_information',$default_options_array);

        register_setting('quake-earth-theme-options', 'quake_general_information');
    }

    add_action('admin_init', 'quake_general_information_data');

function quake_theme_general_information(){
       $quake_general_information =get_option('quake_general_information');
        ?>

<div class="container-fluid">
<div class="wrap">
    <?php screen_icon(); ?>
    <form method="post" action="options.php"> 
        <?php settings_fields('quake-earth-theme-options'); ?>
         <div class="col-lg-3 quake_general_info_display">
<p class="geralinfop genralinfo1"><?php echo $quake_general_information['quake_addess_1']; ?>,</p> 
 <p class="geralinfop genralinfo2"><?php echo $quake_general_information['quakw_city_state']; ?>,</p> 
 <p class="geralinfop genralinfo3"><?php echo $quake_general_information['quake_country']; ?>. </p><br/>

<p class="geralinfop genralinfo4">e: <?php echo $quake_general_information['quake_author_email']; ?></p>
<p class="geralinfop genralinfo5">p: <?php echo $quake_general_information['quake_phone']; ?></p>
<p class="geralinfop genralinfo6">f: <?php echo $quake_general_information['quake_fax']; ?></p>

</div>
        <div class="col-lg-9">
        <table class="form-table">
            <tbody>
                <tr><th scope="row">address 1 : </th>
                <td><input id="generalinfoad" type="text" name="quake_general_information[quake_addess_1]" value="<?php echo $quake_general_information['quake_addess_1']; ?>" placeholder=""></td></tr>
                <tr><th scope="row"> city / state : </th>
                <td><input id="generalinfocity" type="text" name="quake_general_information[quakw_city_state]" value="<?php echo $quake_general_information['quakw_city_state']; ?>" placeholder=""></td></tr>
                <tr><th scope="row">country : </th>
                <td><input id="generalinfocoun" type="text" name="quake_general_information[quake_country]" value="<?php echo $quake_general_information['quake_country']; ?>" placeholder=""></td></tr>
                
                <tr><th scope="row">email : </th>
                <td><input id="generalinfoemail" type="text" name="quake_general_information[quake_author_email]" value="<?php echo $quake_general_information['quake_author_email']; ?>" placeholder=""></td></tr>
                <tr><th scope="row"> phone : </th>
                <td><input  id="generalinfophone" type="text" name="quake_general_information[quake_phone]" value="<?php echo $quake_general_information['quake_phone']; ?>" placeholder=""></td></tr>
                <tr><th scope="row">fax : </th>
                <td><input id="generalinfofax" type="text" name="quake_general_information[quake_fax]" value="<?php echo $quake_general_information['quake_fax']; ?>" placeholder=""></td></tr>
            </tbody>
            </table>
        </div>
          <?php submit_button(); ?>
       </form>
     </div>
</div>

<?php  } ?>
