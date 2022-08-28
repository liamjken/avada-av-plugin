<?php
//create shortcode that embeds the vsa sites page called "Virtual Sales assistance" 
//Page is created via plugin main file on activation
//Query string is used to render the page for a specific vehilce ?VIN-number must be at the end of the url

function vsa_embed_function() {
    $qstring = $_SERVER['QUERY_STRING'];
$content= '<iframe style="min-height:1260px; width:100%; border:none;" src="https://deal-proposal.com/apps/deal_proposal/make_your_deal.html?vin='.$qstring.'&dealer_id=<?php echo do_shortcode("[aimDealerID]"); ?>" width="100%" height="100%">
</iframe>';
   
   return $content;
}

add_shortcode('aim-buynow', 'vsa_embed_function');  
