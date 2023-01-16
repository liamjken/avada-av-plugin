<?php
   /*
   Plugin Name: Auto Verify Integration
   Plugin URI: https://autoverfiy.com
   description: Helps add the autoverify content the site.
   Version: 1.0.0
   Author: Liam Kennedy
   Author URI: https://autoverfiy.com
   License: GPL2
   */

   

add_action('wp_enqueue_scripts', 'plugin_styles');

function plugin_styles() {
    wp_enqueue_style('avPluginStyles', plugins_url('/css/style.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'plugin_scripts');

function plugin_scripts() {
	wp_enqueue_script('avPluginScripts', plugins_url('/js/script.js', __FILE__), array('jquery'), false, true);
}


    /**
     * Include required core files used in admin and on the frontend.
     */

 
    include( plugin_dir_path( __FILE__ ) . 'includes/av-sdk-atributes.php');    
    include( plugin_dir_path( __FILE__ ) . 'includes/listings-ecom-button.php');     
    include( plugin_dir_path( __FILE__ ) . 'includes/attributes-display.php');
    include( plugin_dir_path( __FILE__ ) . 'includes/gallery-vsa-embed.php');
 include( plugin_dir_path( __FILE__ ) . 'includes/aim-admin.php');
 include( plugin_dir_path( __FILE__ ) . 'includes/slack.php');
 include( plugin_dir_path( __FILE__ ) . 'includes/av-carfax-link.php');
 include( plugin_dir_path( __FILE__ ) . 'includes/all-export-ftp.php'); 

    
    
    
