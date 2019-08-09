<?php
/**
 * Template part for displaying posts in a feed.
 * E.g. blog feed, or search results.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paladinwebgroup
 */

?>

<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="feed col">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="thumb-wrapper">
            <?php 
                // If has post thumbnail
                if( has_post_thumbnail() ):
                    the_post_thumbnail();
                else: // Else: load placeholder image instead ?>
                    <div class="watermark">
                        <img src="<?php echo get_template_directory_uri() . '/images/p-shield-reverse.svg'; ?>" alt="Paladin shield watermark">
                    </div>
            <?php  
                endif;
            ?>
        </div>

        <header class="entry-header">
            <?php the_title( '<h3 class="entry-title">','</h3>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div><!-- .entry-content -->
    </article><!-- #post-<?php the_ID(); ?> -->

</a>
