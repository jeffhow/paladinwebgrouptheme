<?php
/**
 * The template for displaying the portfolio archive page
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
        // Get About Page first
        $about = new WP_Query( array( 'post_type' => 'page', 'pagename' => 'about' ) );
        
        if( $about->have_posts() ):
            while( $about->have_posts() ): $about->the_post(); 
                get_template_part( 'template-parts/content', get_post_type() );
            endwhile;
        endif; 

        wp_reset_postdata();

        // Primary Query
		if ( have_posts() ) :
            $i=0;
            $row=false;

            /* Start the Loop */
            while ( have_posts() ) :
				the_post();
                
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
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
