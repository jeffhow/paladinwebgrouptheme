<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paladinwebgroup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site<?php echo is_front_page() ? ' front-page' : '' ?>">
	
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'paladinwebgroup' ); ?></a>

	<header id="masthead" class="site-header site-header-fixed<?php echo is_front_page() ? ' site-header-transparent' : '' ?>">
		<div class="container">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
				
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			
					$paladinwebgroup_description = get_bloginfo( 'description', 'display' );
			
				if ( $paladinwebgroup_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $paladinwebgroup_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'paladinwebgroup' ); ?> <i id="menu-icon" class="fas fa-bars"></i></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->

			
		</div><!-- .container -->
	</header><!-- #masthead -->
	
	<?php if( !is_front_page() ): ?>
		<?php if( is_page('contact') ): ?>
		    <div id="content" class="site-content contact-page">
		<?php else: ?>
		    <div id="content" class="site-content container">
		<?php endif; ?>
	<?php endif; ?>
