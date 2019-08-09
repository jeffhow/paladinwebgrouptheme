<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package paladinwebgroup
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'paladinwebgroup' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
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
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
