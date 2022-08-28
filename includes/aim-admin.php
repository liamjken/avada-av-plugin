<?php 

add_action('admin_menu', 'aim_plugin_create_menu');

  
function aim_plugin_create_menu() {

  //create new top-level menu
  add_menu_page('AIM Plugin Settings', 'AIM Settings', 'administrator', __FILE__, 'aim_plugin_settings_page' , plugins_url('/img/icon.png', __DIR__), );
  add_submenu_page(__FILE__, 'AIM Shortcode', 'AIM Shortcode', 'manage_options', __FILE__.'/custom', 'shortcode_aim');


  //call register settings function
  add_action( 'admin_init', 'register_aim_plugin_settings' );
}

function register_aim_plugin_settings() {
  //register our settings
  register_setting( 'aim-plugin-settings-group', 'dealer_city' );
  register_setting( 'aim-plugin-settings-group', 'dealer_brand' );
  register_setting( 'aim-plugin-settings-group', 'aim_dealer_id' );
  register_setting( 'aim-plugin-settings-group', 'dealer_color' );
  register_setting( 'aim-plugin-settings-group', 'dealer_secondary_color' );
  register_setting( 'aim-plugin-settings-group', 'dealer_background_color' );
}


//content within the AIM Settings tab
function aim_plugin_settings_page() {

  ob_start();
  ?> 

<div class="wrap">
<h1>AIM Settings</h1>

<form method="post" action="options.php">
  <?php settings_fields( 'aim-plugin-settings-group' ); ?>
  <?php do_settings_sections( 'aim-plugin-settings-group' ); ?>
  <table class="form-table">
      <tr valign="top">
      <th scope="row">Dealership City</th>
      <td><input type="text" name="dealer_city" value="<?php echo esc_attr( get_option('dealer_city') ); ?>" /></td>
      </tr>
       
      <tr valign="top">
      <th scope="row">Dealership Brand</th>
      <td><input type="text" name="dealer_brand" value="<?php echo esc_attr( get_option('dealer_brand') ); ?>" /></td>
      </tr>
      
      <tr valign="top">
      <th scope="row">AIM dealer ID</th>
      <td><input type="text" name="aim_dealer_id" value="<?php echo esc_attr( get_option('aim_dealer_id') ); ?>" /></td>
      </tr>

      <tr valign="top">
      <th scope="row">Select Main Colour</th>
      <td><input type="color" id="favcolor" name="dealer_color" value="<?php echo esc_attr( get_option('dealer_color') ); ?>"></td>
      </tr>

      <tr valign="top">
      <th scope="row">Select Secondary Colour</th>
      <td><input type="color" id="favcolor" name="dealer_secondary_color" value="<?php echo esc_attr( get_option('dealer_secondary_color') ); ?>"></td>
      </tr>

      <tr valign="top">
      <th scope="row">Select Background Colour</th>
      <td><input type="color" id="favcolor" name="dealer_background_color" value="<?php echo esc_attr( get_option('dealer_background_color') ); ?>"></td>
      </tr>
  </table>
  
  <?php submit_button(); ?>

</form>
</div>
 <?php
  echo ob_get_clean();
}

//content within the AIM shortcode tab
function shortcode_aim() {

    ob_start();
    ?> 
  
  
  
      <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . '/img/aim-experts-logo.png'; ?>">
  
      <h1>The easiest way to intergrate AIM with your WordPress site    </h1>
  
  
      <p>Just add some simple shortcode to your VDP and Listing pages<p>
      <p>Add this shortcode to your VDP page.  <p>
          <pre>[aim-buttons-static]</pre>
  <p>If adding code to template file use the following code</p>
  <pre>&lt;?php echo do_shortcode("[aim-buttons-static]"); ?&gt;</pre> 
  <p>for floating buttons add the following code to template file.</p>
      <pre>&lt;?php echo do_shortcode("[aim-buttons-float]"); ?&gt;</pre> 
  <p>To add just VSA and calculator buttons to the vdp use the following short code</p>
  <pre>[aim-buttons-vdp]</pre>
  <p>or use this code within the template file</p>
      <pre>&lt;?php echo do_shortcode("[aim-buttons-vdp]"); ?&gt;</pre>
  <p>Add this shortcode to your VLP page.  <p>
  <pre>[aim-buttons-listing]</pre>
  <p>If adding code to template file use the following code</p>
  <pre>&lt;?php echo do_shortcode("[aim-buttons-listing]"); ?&gt;</pre>
                  
       <?php
    echo ob_get_clean();
  }