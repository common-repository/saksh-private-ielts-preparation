<?php

 
 




function saksh_private_ielts_preparation_menu_page(){
 
	
	
	
	 $menu_slug = 'saksh_private_ielts_preparation_support_page';
 
 
add_menu_page( 'Saksh IELTS Support ', 'Saksh IELTS Support', 'read', $menu_slug, false ,'dashicons-store');


add_submenu_page( $menu_slug, 'Saksh IELTS Support', 'Saksh IELTS Support', 'read', $menu_slug, 'saksh_private_ielts_preparation_support_page' );


}
add_action( 'admin_menu', 'saksh_private_ielts_preparation_menu_page' );

/**
 * Display a custom menu page
 */
function saksh_private_ielts_preparation_support_page(){
    
    echo '<div class="wrap">';    echo '<div class="card">';
 
	
	?>
	
	<p>Thanks for installing the wordpress plugin 
	</p>
	
	
	<p> In case any issue you can always reach to whatsapp +91 8840574997</p>
	
	
	<p>
	    To start create a page and insert this short code <strong>   <h2>
	        
	        
	         [PrivateIELTSEXCERCISE] 
	     </h2></strong>
	    
	</p>
	
	
	<?php
	echo '</div>';
	echo '</div>';
	
	
}