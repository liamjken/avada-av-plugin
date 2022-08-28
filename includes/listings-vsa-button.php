<?php 

function av_listings_buttons_function() {
    $price = get_post_meta(get_the_ID(), '_regular_price', true);
    $vin_num = get_post_meta(get_the_ID(), '_sku', true);
    $sale_price = get_post_meta(get_the_ID(), '_sale_price', true);
    global $product;
	ob_start();
	?> 
                <div class="av-srp-ecomm" data-av-vin="<?php echo esc_attr($vin_num); ?>" data-av-price="<?php echo esc_attr($price); ?>" data-av-selling="<?php echo esc_attr($sale_price); ?>" data-av-condition="<?php echo $product->get_attribute( 'condition', 'null' ); ?>" data-av-make="<?php echo $product->get_attribute( 'make' ); ?>" data-av-model="<?php echo $product->get_attribute( 'model' ); ?>" data-av-trim="<?php echo $product->get_attribute( 'trim' ); ?>" ></div> <?php
	return ob_get_clean();
}

add_shortcode('av-buttons-listing', 'av_listings_buttons_function');  