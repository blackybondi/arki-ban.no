<?php
/**
 * Denne blir footer-en til vår nettside
 * www.arki-ban.no
 */
?>
<div class="footer">	
	<footer>
		<div class="webpage-container">
			<div class="col-sm-6 col-md-9  no-padding bottom-footer">
				<?php if(!empty($arkiban_options['copyright'])) {
					echo esc_attr($arkiban_options['copyright']).' '; 
				  }
				?>  				
			</div>
			<div class="col-sm-6 col-md-3 no-padding bottom-footer">
				<div><a href="http://www.finn.no" target="blank"><img src="<?php bloginfo('template_directory'); ?>/img/finn-no.jpg" height="30" width="70"/></a></div>				
			</div>       
		</div>
	</footer>
</div>
<?php wp_footer(); // kilder: http://codex.wordpress.org/Function_Reference/wp_footer ?>

</body>
</html>