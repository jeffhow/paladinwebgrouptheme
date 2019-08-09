<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paladinwebgroup
 */
?>
	</div><!-- #content -->

<?php
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
	}
?>

<aside id="secondary" class="widget-area">
	<section class="container">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</section>
</aside><!-- #secondary -->
