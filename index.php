<?php
/*
  Plugin Name: Saksh Private IELTS Preparation
  Version: 4.1.1
  Plugin URI: #
  Author: susheelhbti
  Author URI: https://profiles.wordpress.org/susheelhbti/
  Description: Provide awesome practice tests to students for the IELTS exam. PrivateIELTSEXCERCISE]
 */
 
 
 


include "saksh_private_ielts_preparation_support.php";
 

include "saksh_private_ielts_preparation_shortcode.php";
 

include "saksh_private_ielts_preparation_install.php";
 
 
register_activation_hook( __FILE__, 'kexam__install' );
register_activation_hook( __FILE__, 'kexam__install_data' );



 
function saksh_scripts(){
      
    $url= plugins_url( 'saksh.css', __FILE__ );
    
    
    
	wp_enqueue_style( 'saksh-css',$url);
	
	
	  $url= plugins_url( 'saksh.js', __FILE__ );

   wp_enqueue_script('saksh_js', $url, array( 'jquery','jquery-ui-core','jquery-ui-accordion' ), '1.0.0',  true);
    
  


    

             
      
      
 
 
    
}
add_action('wp_enqueue_scripts', 'saksh_scripts');

