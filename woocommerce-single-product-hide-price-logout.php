<?php


/**
 * Hide price single product woocommerce and show html for logout user
 *
 * @version 1.0
 * @return $price
 */
function custom_wc_hide_price_logout( $price, $product ) {
    if ( is_user_logged_in() ) {
        return $price;
    } else {

        $html = '<div>';
            $html .= '<a href="' . get_permalink( get_option('woocommerce_myaccount_page_id') ) . '">';
                $html .= __('Log in to see prices', 'text-domain');
            $html .= '<a>';
        $html .= '</div>';


        return $html;
    }
}
add_filter( 'woocommerce_get_price_html', 'custom_wc_hide_price_logout', 99, 2 );
