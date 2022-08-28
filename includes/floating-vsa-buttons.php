<?php

function aim_buttons_float_function() {
    $vin_num = get_post_meta(get_the_id(), 'vin_number', true);
	ob_start();
	?> 


<div class="aim-floating-btns vsa-active">
    
     <div class="aim-btn-box">
         <script src="https://automediaservices.com/apps/deal_widgets/deposit/js/widget.js"type="text/javascript"></script>
<div class="aim_deal_deposit_app" dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>" vin="<?php echo esc_attr($vin_num); ?>" >         
<button class="reserve-button" onclick="aim_deal_deposit_widget.show_widget_dialog({dealer_id:<?php echo do_shortcode("[aimDealerID]"); ?>,vin:'<?php echo esc_attr($vin_num); ?>',deposit:49})">
    
    <table class="aim-btn-table">
  <tr>
    <td width="40px;"><img width="40px;" height="40px;" src="<?php echo plugin_dir_url( __FILE__ ) . '/img/aim-clock.png'; ?>"></td>
      <td width="10px;"></td>
    <td width="146px;" class="aim-btn-text">RESERVE <br/>VEHICLE NOW</td>
  </tr>
</table>

    </button></div>

<script src="https://automediaservices.com/apps/deal_widgets/credit/js/widget.js" type="text/javascript"></script>
<div class="aim_deal_credit_app">
<button class="credit-button" onclick="aim_deal_apply_credit_widget.show_widget_dialog({dealer_id:<?php echo do_shortcode("[aimDealerID]"); ?>})">
    
    <table class="aim-btn-table">
  <tr>
    <td width="40px;"><img style="position: relative;left: 3px;" width="40px;" height="40px;" src="<?php echo plugin_dir_url( __FILE__ ) . '/img/aim-credit-card.png'; ?>"></td>
      <td width="20px;"></td>
    <td width="146px;" class="aim-btn-text">APPLY FOR<br/> CREDIT</td>
  </tr>
</table>

</button></div>

<script src="https://automediaservices.com/apps/test_drive/js/widget.js"type="text/javascript"></script>
<div class="aim_deal_test_drive_app"  dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>" vin="<?php echo esc_attr($vin_num); ?>" >         
<button class="btest-drive-button" onclick="aim_deal_test_drive_widget.show_widget_dialog({dealer_id:<?php echo do_shortcode("[aimDealerID]"); ?>,vin:'<?php echo esc_attr($vin_num); ?>'})">
    
    <table class="aim-btn-table">
  <tr>
    <td width="40px;"><img style="position: relative;left: 3px;" width="40px;" height="40px;" src="<?php echo plugin_dir_url( __FILE__ ) . '/img/aim-wheel.png'; ?>"></td>
      <td width="20px;"></td>
    <td width="146px;" class="aim-btn-text">BOOK A<br/> TEST DRIVE</td>
  </tr>
</table>

    </button></div>
        
        <script src="https://automediaservices.com/apps/calculatorPro/myjs/widget.js" type="text/javascript"></script>
<div class="aim_deal_sheet_app" dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>" vin="<?php echo esc_attr($vin_num); ?>">
         <button class="vtrade-button" onclick="aim_deal_sheet_widget.show_widget_dialog({dealer_id:<?php echo do_shortcode("[aimDealerID]"); ?>,vin:'<?php echo esc_attr($vin_num); ?>'})">
    
    <table class="aim-btn-table">
  <tr>
    <td width="40px;"><img style="position: relative;left: 3px;" width="40px;" height="40px;" src="<?php echo plugin_dir_url( __FILE__ ) . '/img/aim-keys.png'; ?>"></td>
      <td width="20px;"></td>
    <td width="146px;" class="aim-btn-text">VALUE MY<br/> TRADE-IN</td>
  </tr>
</table>

    </button></div>
        

<div class="aim_deal_sheet_app" dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>" vin="<?php echo esc_attr($vin_num); ?>">
         <button class="moffer-button" onclick="aim_deal_sheet_widget.show_widget_dialog({dealer_id:<?php echo do_shortcode("[aimDealerID]"); ?>,vin:'<?php echo esc_attr($vin_num); ?>'})">
    
    <table class="aim-btn-table">
  <tr>
    <td width="40px;"><img style="position: relative;left: 3px;" width="40px;" height="40px;" src="<?php echo plugin_dir_url( __FILE__ ) . '/img/aim-hand.png'; ?>"></td>
      <td width="20px;"></td>
    <td width="146px;" class="aim-btn-text">MAKE AN<br/> OFFER</td>
  </tr>
</table>

    </button></div>
        <script src="https://automediaservices.com/apps/deal_widgets/google_review/js/widget.js"type="text/javascript"></script>
<div class="aim_deal_google_review_app" dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>">
        <button class="greview-button" onclick="aim_deal_google_review_widget.show_widget_dialog()">
    
    <table class="aim-btn-table">
  <tr>
    <td width="40px;"><img style="position: relative;left: 3px;" width="40px;" height="40px;" src="<?php echo plugin_dir_url( __FILE__ ) . '/img/aim-google.png'; ?>"></td>
      <td width="20px;"></td>
    <td width="146px;" class="aim-btn-text">GOOGLE<br/> REVIEWS</td>
  </tr>
</table>

</button></div>
        
    
    </div>
    
    </div>
<?php
	return ob_get_clean();
}

add_shortcode('aim-buttons-float', 'aim_buttons_float_function'); 

//for the floating button option, the VSA and calculator are static this is the short code for them


function aim_vdp_buttons_function() {
    $vin_num = get_post_meta(get_the_id(), 'vin_number', true);
	ob_start();
	?> 
<script src="https://automediaservices.com/preview/calculator/lease_calculator.js" type="text/javascript"></script>
<div id="aim_lease_calculator"  vin="2C3CDZC92LH182045" dealer_id="28000" apply_boostrap="1"></div>
                
<script src="https://automediaservices.com/apps/calculatorPro/myjs/widget.js" type="text/javascript"></script>
<div class="aim_deal_sheet_app vsa-active" dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>" vin="<?php echo esc_attr($vin_num); ?>">
<button class="vsa-modal" onclick="aim_deal_sheet_widget.show_widget_dialog({dealer_id:<?php echo do_shortcode("[aimDealerID]"); ?>,vin:'<?php echo esc_attr($vin_num); ?>'})"></button>
</div> 

<?php
	return ob_get_clean();
}

add_shortcode('aim-buttons-vdp', 'aim_vdp_buttons_function');