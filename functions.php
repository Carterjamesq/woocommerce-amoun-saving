// Saving amount in product cards
function display_total_savings_on_sale_products() {
    global $product;

    if ( $product->is_on_sale() ) {
        $regular_price = $product->get_regular_price();
        $sale_price = $product->get_sale_price();

        if ( $regular_price && $sale_price ) {
            $saving = $regular_price - $sale_price;
            echo '<p class="saved-amount">Знижка: ' . wc_price( $saving ) . '</p>';
        }
    }
}

add_action( 'woocommerce_after_shop_loop_item_title', 'display_total_savings_on_sale_products', 20 );
