<?php
/**
 * Denne blir header-en til vår nettside
 * www.arki-ban.no
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php 
//kilder: http://codex.wordpress.org/Function_Reference/wp_head
wp_head(); 
?>
</head>

<body <?php body_class(); //kilder: http://codex.wordpress.org/Function_Reference/body_class ?>>
	<div class="header">
		<header>	
			<div class="header_bottom">
	        <div class="webpage-container">
	          
	            <div class="header_menu">    
	              
                	<div><h1 class="site-title"><a href="<?php echo esc_url(site_url()); ?>"><?php echo get_bloginfo('name'); ?></a></h1></div>
	                 
	             
	              
	            </div>				
	         	
	        </div> 
	      </div>         
		</header>
	</div>