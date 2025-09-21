<?php
/**
 * Site header search always visible with icon inside input
 *
 * @package OceanWP Child Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$item_search_attrs = apply_filters( 'oceanwp_attrs_search_bar', '' );
?>

<div id="searchform-always" class="header-searchform-wrap clr" <?php echo $item_search_attrs; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="field" name="s" placeholder="Search products..." />
		<button type="submit" class="search-submit">
			<span class="icon">&#128269;</span> <!-- magnifying glass icon -->
		</button>
	</form>
</div>