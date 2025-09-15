<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<style>
/* --- Make sure WP/Theme default container padding doesn't leave a gap --- */
.woocommerce .content-area,
.woocommerce-page .content-area,
.woocommerce #primary,
.woocommerce-page #primary,
.site-content,
.container {
    padding-left: 0 !important;
    padding-right: 0 !important;
    margin-left: auto !important;
    margin-right: auto !important;
    max-width: 1200px !important;
    width: 100% !important;
    box-sizing: border-box;
}

/* --- Layout wrapper: products left, sidebar right --- */
.shop-content-wrapper {
    display: flex;
    gap: 30px;
    align-items: flex-start;
    margin: 20px auto;
    padding: 0 15px;
    box-sizing: border-box;
    max-width: 1200px;
}

/* products area (left) and sidebar (right) */
.shop-products {
    flex: 1 1 calc(75% - 30px);
    min-width: 300px;
}
.shop-sidebar {
    flex: 0 0 25%;
    min-width: 250px;
    box-sizing: border-box;
    align-self: flex-start;
}

/* --- Banner --- */
.custom-shop-banner {
    background: #f5f5f5;
    padding: 20px;
    text-align: center;
    border-bottom: 2px solid #ddd;
}
.custom-shop-banner img {
    width: 100% !important;
    height: auto !important;
    max-height: 350px;
    object-fit: cover !important;
    display: block;
    border-radius: 6px;
    margin-bottom: 15px;
}
.custom-shop-banner h2 { color: #333; font-size: 28px; margin: 0 0 10px; }
.custom-shop-banner p { color: #666; font-size: 16px; margin: 0; }

/* --- Product grid --- */
.shop-products ul.products,
.woocommerce ul.products {
    display: grid !important;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)) !important;
    gap: 24px !important;
    margin: 0 !important;
    padding: 0 !important;
    list-style: none;
    box-sizing: border-box;
}

/* --- SALE badge --- */
.woocommerce span.onsale,
.shop-products ul.products li.product .onsale {
    background: #ff4d4d !important; /* bright red */
    color: #fff !important;
    font-size: 0.85rem !important;
    font-weight: 700 !important;
    text-transform: uppercase;
    padding: 6px 10px !important;
    border-radius: 30px !important;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    position: absolute !important;
    top: 10px !important;
    left: 10px !important;
    z-index: 2 !important;
}

/* If the theme tries to hide/clip it in grid layout, ensure it shows */
.shop-products ul.products li.product {
    position: relative !important;
}


/* --- Product card --- */
.shop-products ul.products li.product,
.woocommerce ul.products li.product {
    background: #fff !important;
    border: 1px solid #e7e7e7 !important;
    border-radius: 10px !important;
    padding: 16px !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start;
    box-sizing: border-box;
    transition: box-shadow .25s ease, transform .25s ease;
    height: 100%;
    width: 100%;
}
.shop-products ul.products li.product:hover {
    box-shadow: 0 14px 36px rgba(0,0,0,0.08) !important;
    transform: translateY(-4px) !important;
}

/* --- Ensure product image takes full card width and is consistent --- */
.shop-products ul.products li.product img.attachment-woocommerce_thumbnail,
.shop-products ul.products li.product img.attachment-shop_catalog,
.shop-products ul.products li.product img.wp-post-image,
.shop-products ul.products li.product img {
    width: 100% !important;
    height: 220px !important;
    object-fit: contain !important;
    display: block;
    margin: 0 0 12px;
    border-radius: 6px;
    background: transparent;
}

/* Image hover zoom (subtle) */
.shop-products ul.products li.product .woocommerce-LoopProduct-link img {
    transition: transform .3s ease;
}
.shop-products ul.products li.product:hover .woocommerce-LoopProduct-link img {
    transform: scale(1.03);
}

/* --- Title and category label --- */
.shop-products ul.products li.product .woocommerce-loop-product__title {
    font-size: 1.02rem;
    font-weight: 700;
    color: #222;
    margin: 8px 0 6px;
    line-height: 1.2;
}

/* small category label above title (if present) */
.shop-products ul.products li.product .posted_in,
.shop-products ul.products li.product .product_meta {
    color: #9aa0a6;
    font-style: italic;
    font-size: 0.92rem;
    margin-bottom: 6px;
}

/* --- Price --- */
.shop-products ul.products li.product .price {
    color: #27ae60 !important;
    font-weight: 700;
    font-size: 1.08rem;
    margin-bottom: 12px;
}

/* --- Buttons container alignment: push CTA to bottom --- */
/* Many themes put buttons inside anchors or wrapper elements — use general selectors */
.shop-products ul.products li.product .button,
.shop-products ul.products li.product a.button,
.shop-products ul.products li.product .add_to_cart_button,
.shop-products ul.products li.product .woocommerce-loop-product__link .button {
    margin-top: auto !important; /* push to bottom of flex column */
}

/* Wrap bottom actions to align horizontally if needed */
.shop-products ul.products li.product .product-bottom {
    margin-top: auto;
    display: flex;
    gap: 8px;
    justify-content: center;
    align-items: center;
}

/* --- Add to cart button styles --- */
.shop-products ul.products li.product a.button,
.shop-products ul.products li.product .button,
.shop-products ul.products li.product .add_to_cart_button,
.shop-products ul.products li.product .button.add_to_cart_button {
    display: inline-block;
    background: #0073aa !important;
    color: #fff !important;
    padding: 10px 14px !important;
    border-radius: 6px !important;
    font-size: 13px !important;
    font-weight: 700;
    text-transform: uppercase;
    text-align: center;
    border: none !important;
    box-shadow: none !important;
    transition: background .18s ease, transform .12s ease;
}
.shop-products ul.products li.product a.button:hover,
.shop-products ul.products li.product .button:hover,
.shop-products ul.products li.product .add_to_cart_button:hover {
    background: #005177 !important;
    transform: translateY(-1px);
}

/* --- Wishlist (YITH / common classes) --- */
.shop-products ul.products li.product .yith-wcwl-add-to-wishlist a,
.shop-products ul.products li.product .yith-wcwl-add-to-wishlist .add_to_wishlist,
.shop-products ul.products li.product .yith-wcwl-wishlistaddedbrowse a {
    display: inline-block;
    background: #f6f7f8;
    color: #333;
    padding: 8px 12px;
    border-radius: 6px;
    font-weight: 600;
    text-decoration: none;
    border: 1px solid #e6e6e6;
}
.shop-products ul.products li.product .yith-wcwl-add-to-wishlist a:hover {
    background: #eeeeee;
}

/* If the wishlist button is an icon only, give it spacing */
.shop-products ul.products li.product .yith-wcwl-add-to-wishlist a .icon,
.shop-products ul.products li.product .yith-wcwl-add-to-wishlist .add_to_wishlist .icon {
    margin-right: 6px;
}

/* --- Ensure buttons align horizontally on desktop --- */
.shop-products ul.products li.product .woocommerce-loop-product__link .button,
.shop-products ul.products li.product .yith-wcwl-add-to-wishlist {
    display: inline-block;
}

/* --- Responsive --- */
@media (max-width: 992px) {
    .shop-content-wrapper { gap: 20px; padding: 0 12px; }
    .shop-products { flex: 1 1 100%; order: 1; }
    .shop-sidebar { flex: 1 1 100%; order: 2; min-width: 0; }
    .shop-products ul.products { grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 16px; }
    .shop-products ul.products li.product img { height: 180px !important; }
}
@media (max-width: 560px) {
    .shop-products ul.products li.product img { height: 140px !important; }
    .shop-products ul.products { grid-template-columns: repeat(1, 1fr); }
}
</style>

<div class="custom-shop-banner">
    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/solar.avif'; ?>" alt="Shop Banner" />
    <h2>Welcome to Our Store!</h2>
    <p>Check out our latest deals below.</p>
</div>

<div class="shop-content-wrapper">
    <div class="shop-products">
        <?php
        do_action( 'woocommerce_before_main_content' );

        if ( woocommerce_product_loop() ) {
            woocommerce_product_loop_start();

            while ( have_posts() ) {
                the_post();
                wc_get_template_part( 'content', 'product' );
            }

            woocommerce_product_loop_end();
        } else {
            do_action( 'woocommerce_no_products_found' );
        }

        do_action( 'woocommerce_after_main_content' );
        ?>
    </div>

    <aside class="shop-sidebar">
        <h3>Categories</h3>
        <?php
        $args = array(
            'taxonomy'     => 'product_cat',
            'orderby'      => 'name',
            'show_count'   => true,
            'pad_counts'   => false,
            'hierarchical' => true,
            'hide_empty'   => true,
        );
        $product_categories = get_terms( $args );

        if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
            echo '<ul>';
            foreach ( $product_categories as $category ) {
                $category_link = get_term_link( $category );
                echo '<li><a href="' . esc_url( $category_link ) . '">' . esc_html( $category->name );
                if ( $category->count ) {
                    echo ' (' . intval( $category->count ) . ')';
                }
                echo '</a></li>';
            }
            echo '</ul>';
        } else {
            echo '<p>No categories found.</p>';
        }
        ?>
    </aside>
</div>

<?php get_footer( 'shop' ); ?>