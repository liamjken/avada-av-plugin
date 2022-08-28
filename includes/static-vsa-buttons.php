<?php

function aim_buttonss_static_function() {
    $vin_num = get_post_meta(get_the_id(), 'vin_number', true);
	ob_start();
	?>
<script src="https://automediaservices.com/apps/calculatorPro/myjs/widget.js" type="text/javascript"></script>
<div class="aim_deal_sheet_app vsa-active" dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>" vin="<?php echo esc_attr($vin_num); ?>">
<button class="vsa-modal" onclick="aim_deal_sheet_widget.show_widget_dialog({dealer_id:<?php echo do_shortcode("[aimDealerID]"); ?>,vin:'<?php echo esc_attr($vin_num); ?>'})"></button>
</div> 

<script src="https://automediaservices.com/apps/deal_widgets/deposit/js/widget.js"type="text/javascript"></script>
<div id="aim_deal_deposit_app" class="aim_deal_deposit_app vsa-active" dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>" vin="<?php echo esc_attr($vin_num); ?>" >
<button class="reserve-now aim-button vsa-active" onclick="aim_deal_deposit_widget.show_widget_dialog({dealer_id:<?php echo do_shortcode("[aimDealerID]"); ?>,vin:'<?php echo esc_attr($vin_num); ?>',deposit:49})"></button></div>

<script src="https://automediaservices.com/apps/deal_widgets/credit/js/widget.js" type="text/javascript"></script>
<div class="aim_deal_credit_app"></div>
<button class="credit-apply-aim aim-button vsa-active" onclick="aim_deal_apply_credit_widget.show_widget_dialog({dealer_id:<?php echo do_shortcode("[aimDealerID]"); ?>})"></button>

<script src="https://automediaservices.com/apps/test_drive/js/widget.js"type="text/javascript"></script>
<div class="aim_deal_test_drive_app vsa-active"  dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>" vin="<?php echo esc_attr($vin_num); ?>" >
<button class="test-drive aim-button" style="background: url(https://aimexperts.com/deal-sheet-images/Test-Drive.png); background-repeat: no-repeat; " onclick="aim_deal_test_drive_widget.show_widget_dialog({dealer_id:<?php echo do_shortcode("[aimDealerID]"); ?>,vin:'<?php echo esc_attr($vin_num); ?>'})"></button></div>

<div class="aim_deal_sheet_app vsa-active" dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>" vin="<?php echo esc_attr($vin_num); ?>">
<button class="value-trade-aim aim-button"  onclick="aim_deal_sheet_widget.show_widget_dialog({dealer_id:<?php echo do_shortcode("[aimDealerID]"); ?>,vin:'<?php echo esc_attr($vin_num); ?>'})"></button>
</div>

<div class="aim_deal_sheet_app vsa-active" dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>" vin="<?php echo esc_attr($vin_num); ?>">
<button class="make-offer-aim aim-button"  onclick="aim_deal_sheet_widget.show_widget_dialog({dealer_id:<?php echo do_shortcode("[aimDealerID]"); ?>,vin:'<?php echo esc_attr($vin_num); ?>'})"></button>
</div>

<script src="https://automediaservices.com/apps/deal_widgets/google_review/js/widget.js"type="text/javascript"></script>
<div class="aim_deal_google_review_app" dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>"></div>
<button class="aim-g-review aim-button vsa-active" onclick="aim_deal_google_review_widget.show_widget_dialog()"></button>

<div id="aim_lease_calculator" vin="<?php echo esc_attr($vin_num); ?>" dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>" widget_background="d70e25"  open_in_window="0" ></div>
<script src="https://automediaservices.com/apps/calculator/lease_calculator.js" type="text/javascript"></script>

<?php
	return ob_get_clean();
}

add_shortcode('aim-buttons-static', 'aim_buttonss_static_function');