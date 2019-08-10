<?php
/**
 * The template for displaying the 'about' page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paladinwebgroup
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

        endwhile; // End of the loop.
        
        // Get the portfolio query
        $query = new WP_Query( array( 'category_name' => 'portfolio' ) );

		if ( $query->have_posts() ) :
            $i=0;
            $row=false;

            /* Start the Loop */
            while ( $query->have_posts() ) :
				$query->the_post();
                
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

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

        wp_reset_postdata();

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
