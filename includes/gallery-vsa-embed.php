<?php

function aim_gallery_function() {
    if ( is_admin()) return '';
    $vin_num = get_post_meta(get_the_ID(), '_sku', true);
    
   ob_start();
   ?> 
  <div id="aim360_iframe_container" aim360_vin="<?php echo esc_attr($vin_num); ?>" dealer_id="29007" aim360_iframe_background="0084dd" aim360_iframe_width="100%" aim360_iframe_height="680" no_gallery="0"></div><script type="text/javascript" src="https://automediaservices.com/apps/threesixty/js/aim360_developer_iframe.js"></script>

   <?php
   return ob_get_clean();
   }
   add_shortcode('aim-gallery', 'aim_gallery_function'); 