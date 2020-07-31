<?php
function my_theme_enqueue_styles() {

$parent_style = 'parent-style';

wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css'     );
wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( $parent_style )
);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );




/**
 * Add short description to WooCommerce product blocks
 */
add_filter('woocommerce_blocks_product_grid_item_html', 'add_short_desc_woocommerce_blocks_product_grid_item_html', 10 , 3);
function add_short_desc_woocommerce_blocks_product_grid_item_html($content, $data, $product) {
    $short_description = '<div class="wc-block-grid__product-short-description">' . $product->get_short_description() . '</div>';

    // This will inject the short description after the first link (assumed: the default product link).
    $after_link_pos = strpos($content, "</a>");
    $before = substr($content, 0, $after_link_pos + 4);
    $after = substr($content, $after_link_pos + 4);

    $content = $before . $short_description . $after;

    return $content;
}
?>



