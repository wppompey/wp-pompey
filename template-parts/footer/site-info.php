<?php
/**
 * Displays footer site info, if the widget area is used.
 *
 * @package wp-pompey
 */

?>
<div class="site-info">
<?php
if ( is_active_sidebar( 'sidebar-4' ) ) :
?>
	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Site info', 'wp-pompey' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
			<div class="widget-column ">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div>
		<?php } ?>
	</aside><!-- .widget-area -->
<?php else : ?>
	//<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?></a>
	
<?php endif; ?>

</div><!-- .site-info -->
