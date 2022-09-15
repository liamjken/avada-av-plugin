<?php

add_action('wp_head', 'autoverify_sdk_wp_attr' );
function autoverify_sdk_wp_attr(){
    $price = get_post_meta(get_the_ID(), '_regular_price', true);
    $vin_num = get_post_meta(get_the_ID(), '_sku', true);
    $sdkurl = esc_attr( get_option('av_sdk_url') );
    global $product;

    if (is_product()) {
        
   
    //Close PHP tags 
    ?>
    <div id="av_vehicle_information" data-av-vin="<?php echo esc_attr($vin_num); ?>" data-av-price="<?php echo esc_attr($price); ?>" data-av-condition=" <?php echo $product->get_attribute( 'condition', 'null' ); ?> " data-av-make="<?php echo $product->get_attribute( 'make' ); ?>" data-av-model="<?php echo $product->get_attribute( 'model' ); ?>" data-av-trim="<?php echo $product->get_attribute( 'trim' ); ?>" data-av-mileage="<?php echo $product->get_attribute( 'mileage' ); ?>"></div>
<script async defer src="<?php echo esc_attr($sdkurl); ?>"></script>
    <?php //Open PHP tags

}else {

    ?>
<script async defer src="<?php echo esc_attr($sdkurl); ?>"></script>
    <?php //Open PHP tags

}


} 



