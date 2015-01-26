<?php
/**
 * Dette blir vårt WordPress hoved tema/design
 * www.arki-ban.no
 */
?>
<?php get_header(); //kilder: http://codex.wordpress.org/Function_Reference/get_header ?>
<div id="content" class="content">
	<section>				
	<div class="menu-container">
		<ul class="ca-menu">
		<?php
		// kilder: http://codex.wordpress.org/Function_Reference/get_terms
		// standard kode for at WordPress skal erkjenne nav menyet
		$menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) ); 
		foreach ( $menus as $menu ):
		?>
			<li>
				<a href="#">
					<span class="ca-icon"><img src="<?php bloginfo('template_directory'); // http://codex.wordpress.org/Function_Reference/bloginfo ?>/img/house.png" /></span>
						<div class="ca-content">
							<h2 class="ca-main"><?php echo $menu->name; ?></h2>
							<h3 class="ca-sub"></h3>
						</div>
				</a>
			</li>		
		<?php endforeach; ?>                                               
		</ul>
	</div>
	</section> 
</div>
<?php get_footer(); //kilder: http://codex.wordpress.org/Function_Reference/get_footer ?>