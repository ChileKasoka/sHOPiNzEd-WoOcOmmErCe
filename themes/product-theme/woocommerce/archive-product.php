<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<style>
    /* Custom shop banner styles */
    .custom-shop-banner {
        background: #f5f5f5;
        padding: 20px;
        text-align: center;
        border-bottom: 2px solid #ddd;
    }
    .custom-shop-banner h2 {
        color: #333;
        font-size: 28px;
        margin: 0 0 10px;
    }
    .custom-shop-banner p {
        color: #666;
        font-size: 16px;
        margin: 0;
    }

    /* Product grid adjustments */
    ul.products li.product {
        background: #fff;
        border: 1px solid #e1e1e1;
        padding: 15px;
        border-radius: 5px;
        transition: box-shadow 0.3s ease;
    }
    ul.products li.product:hover {
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
</style>

<div class="custom-shop-banner">
    <h2>Welcome to Our Store!</h2>
    <p>Check out our latest deals below.</p>
</div>

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

get_footer( 'shop' );