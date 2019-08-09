<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paladinwebgroup
 */

?>

	

	<footer id="colophon" class="site-footer">
		<section class="site-info container">
			<div class="row">
				<p class="copyright">Copyright &copy; <?php echo date("Y"); ?> 
					<a href="http://paladinwebgroup.com">Paladin&nbsp;Web&nbsp;Group</a>
				</p>
				<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
				<hr>
				<div class="col info">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'social-menu',
							'menu_class'	 => 'social-menu-theme',
							
						) );
					?>
				</div>
				<div class="col info">
					<?php
						// Terms | Privacy | Site Map | Contact
						wp_nav_menu( array(
							'theme_location' => 'menu-3',
							'menu_id'        => 'footer-menu',
							'menu_class'	 => 'footer-menu-theme',		
						) );
					?>
				</div>
			</div><!-- .row -->
		</section><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
