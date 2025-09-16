<?php
/**
 * Topbar layout
 *
 * @package OceanWP WordPress theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Classes.
$classes = array( 'clr' );
if ( true !== get_theme_mod( 'ocean_top_bar_full_width', false ) ) {
	$classes[] = 'container';
}
$classes = implode( ' ', $classes );
?>

<?php do_action( 'ocean_before_top_bar' ); ?>

<div id="top-bar-wrap" class="<?php echo esc_attr( oceanwp_topbar_classes() ); ?>">

	<div id="top-bar" class="<?php echo esc_attr( $classes ); ?>">

		<?php do_action( 'ocean_before_top_bar_inner' ); ?>

		<div id="top-bar-inner" class="clr">

			<?php
			// Always load your topbar content
			get_template_part( 'partials/topbar/content' );
			?>

		</div><!-- #top-bar-inner -->

		<?php do_action( 'ocean_after_top_bar_inner' ); ?>

	</div><!-- #top-bar -->

</div><!-- #top-bar-wrap -->

<?php do_action( 'ocean_after_top_bar' ); ?>