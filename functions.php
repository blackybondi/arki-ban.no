<?php

/* kilder: http://codex.wordpress.org/Theme_Development#Functions_File
denne guide-en har vi benyttet for å lage et WordPress tema fra scratch
*/
function arkiban_front_end_enqueue()
{
	//kilder: http://codex.wordpress.org/Function_Reference/wp_enqueue_style
	
	//custom.css er en wordpress standard css tjeneste som er ferdig lagt og trengs bare å implimentere/linke.
	wp_enqueue_style('arkiban-custom', get_template_directory_uri().'/css/custom.css', array());

	wp_enqueue_style('arkiban-mainmenu-style', get_template_directory_uri().'/css/mainmenu.css', array());
}
	//kilder: http://codex.wordpress.org/Function_Reference/add_action
	add_action('wp_enqueue_scripts', 'arkiban_front_end_enqueue');

?>