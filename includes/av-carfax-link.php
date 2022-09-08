<?php 

function av_carfax_button_function() {
    $car_fax_link = get_post_meta(get_the_ID(), 'car_fax_link', true);
	ob_start();
	?> 

<?php if(!empty($car_fax_link)) { ?>	
             <a style="color:#000000;" href="<?php echo $car_fax_link; ?>" target="_blank"><img src="<?php echo plugin_dir_url( __DIR__ ) . '/img/carfax-logo.png'; ?>"></a>
            <?php } ?>

<?php
	return ob_get_clean();
}

add_shortcode('av-carfax', 'av_carfax_button_function'); 
