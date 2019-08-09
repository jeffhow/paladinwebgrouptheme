<?php
/**
 * The template for displaying the static home page
 *
 * This is the template that displays the static home page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paladinwebgroup
 */

get_header();
?>

<div class="hero" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="custom-logo custom-logo-spacer"></div> 

	<h2><?php echo get_bloginfo( 'description', 'display' );?></h2>

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" title="Contact us" class="btn btn-ghost">Contact</a>
</div>

	<?php
		/**
		 * Front-page: '.container' class assigned in the page content blocks 
		 */
	?>
	<div id="content" class="site-content">
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php

		while ( have_posts() ) :
			the_post();
			
			the_content();

		// 	get_template_part( 'template-parts/content', 'front' );

		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
