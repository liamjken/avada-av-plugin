<?php 
function av_vin_function() {
    if ( is_admin()) return '';
    $vin_num = get_post_meta(get_the_ID(), '_sku', true);
    
	ob_start();
	?> 
    <?php echo esc_attr($vin_num); ?> <?php
	return ob_get_clean();
    
}

add_shortcode('av-vin', 'av_vin_function');  

function av_stock_function() {
    if ( is_admin()) return '';
    global $product;
    
	ob_start();
	?> 
    <?php echo $product->get_attribute( 'stock' ); ?> <?php
	return ob_get_clean();
    
}

add_shortcode('av-stock', 'av_stock_function');  

function av_condition_function() {
    if ( is_admin()) return '';
    global $product;
    
	ob_start();
	?> 
    <span style="text-transform:lowercase;"><?php echo $product->get_attribute( 'condition' ); ?></span> <?php
	return ob_get_clean();
    
}

add_shortcode('av-condition', 'av_condition_function');  


function av_bodystyle_function() {
    if ( is_admin()) return '';
    global $product;
    
	ob_start();
	?> 
    <?php echo $product->get_attribute( 'body-style' ); ?> <?php
	return ob_get_clean();
    
}

add_shortcode('av-body-style', 'av_bodystyle_function');  


  function av_mileage_function() {
    if ( is_admin()) return '';
    global $product;
    $mileage = $product->get_attribute( 'mileage' );
    $kms = substr($mileage, 0, -3);

      return number_format($kms);
  }
  
  add_shortcode('av-kms', 'av_mileage_function');

  function av_trans_function() {
    if ( is_admin()) return '';
    global $product;
    
	ob_start();
	?> 
    <?php echo $product->get_attribute( 'transmission' ); ?> <?php
	return ob_get_clean();
    
}

add_shortcode('av-transmission', 'av_trans_function');  

function av_engine_function() {
    if ( is_admin()) return '';
    global $product;
    
	ob_start();
	?> 
    <?php echo $product->get_attribute( 'engine-size' ); ?> <?php
	return ob_get_clean();
    
}

add_shortcode('av-engine', 'av_engine_function');  

function av_drivetrain_function() {
    if ( is_admin()) return '';
    global $product;
    
	ob_start();
	?> 
    <?php echo $product->get_attribute( 'drivetrain' ); ?> <?php
	return ob_get_clean();
    
}

add_shortcode('av-drivetrain', 'av_drivetrain_function');  

function av_extcolor_function() {
    if ( is_admin()) return '';
    global $product;
    
	ob_start();
	?> 
    <?php echo $product->get_attribute( 'exterior-colour' ); ?> <?php
	return ob_get_clean();
    
}

add_shortcode('av-extcolor', 'av_extcolor_function');  

function AVgroupLink_function() {
    $price = get_post_meta(get_the_ID(), '_regular_price', true);
    if ( is_admin()) return '';
    global $product;
    
	ob_start();
	?> 
    <?php echo esc_attr($price); ?> <?php
	return ob_get_clean();
    
}

add_shortcode('AVgroupLink', 'AVgroupLink_function');  