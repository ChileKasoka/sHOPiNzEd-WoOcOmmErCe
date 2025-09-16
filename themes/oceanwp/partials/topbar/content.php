<?php
/**
 * Topbar content
 *
 * @package OceanWP WordPress theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div id="top-bar-content" class="topbar-flex <?php echo esc_attr( oceanwp_topbar_content_classes() ); ?>">

	<!-- Left: Logo -->
	<div class="topbar-logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="http://shopinzed.local/wp-content/uploads/2025/09/siz.png" 
			     alt="sHoPiNzEd Logo" 
			     style="max-height:60px; width:auto;" />
		</a>
	</div>

	<!-- Right: Contact Info -->
	<div class="topbar-right">
		<span class="top-phone">📞 <a href="tel:+260971234567">+260 97 123 4567</a></span>
		<span class="top-email">✉️ <a href="mailto:sales@shopinzed.com">sales@shopinzed.com</a></span>
	</div>

</div><!-- #top-bar-content -->