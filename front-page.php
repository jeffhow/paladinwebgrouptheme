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
	<div class="hero-content">
		<h2><?php echo get_bloginfo( 'description', 'display' );?></h2>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" title="Contact us" class="btn btn-ghost">Contact</a>
	</div>
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

			<div class="about container">
			<?php 
				
				// Get the 'About' page
				$about = new WP_Query( array( 'post_type' => 'page', 'pagename' => 'about' ) );
        
				if( $about->have_posts() ):
					while( $about->have_posts() ): $about->the_post(); 
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
				endif; 
		
				wp_reset_postdata();

				// Get the portfolio query
				$portfolio = new WP_Query( array( 'category_name' => 'portfolio' ) );

				if ( $portfolio->have_posts() ) :
					$i=0;
					$row=false;

					/* Start the Loop */
					while ( $portfolio->have_posts() ) :
						$portfolio->the_post();
						
						// Start of a row
						if( $i % 3 == 0 ) { 
							echo'<div class="row">';
							$row = true;
						}

						get_template_part( 'template-parts/content', 'feed' );
						
						$i++;
						
						// End of a row
						if( $i % 3 == 0 ) {
							echo '</div><!-- .row -->';
							$row=false;
						}

					endwhile;

					if( $row ){ // If row wasn't closed before loop ended
						echo '</div><!-- .row -->';
						$row=false;
					}
					
					// See more?
					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;

				wp_reset_postdata(); 
				
				?>

			</div>

			<div class="contact page-contact">

			<?php 
				// Get the 'contact' page
				$contact = new WP_Query( array( 'post_type' => 'page', 'pagename' => 'contact' ) );
			
				if( $contact->have_posts() ):
					while( $contact->have_posts() ): $contact->the_post(); 
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
				endif; 
		
				wp_reset_postdata();
			?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
