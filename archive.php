<?php
/**
 * The template for displaying archive pages
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
