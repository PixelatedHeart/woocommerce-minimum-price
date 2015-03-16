<?php 

/**
 * Only display minimum price for WooCommerce variable products
 **/
add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);

function custom_variation_price( $price, $product ) {

     $price = '';


     $price .= woocommerce_price($product->get_price());
     $price .= $product->get_price_suffix();

     return $price;
} 
