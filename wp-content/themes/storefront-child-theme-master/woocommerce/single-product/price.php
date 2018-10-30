<?php
/**
 * Single Product Price
 *
 * @author  CaYou
 * @version 0.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Condition sur le prix
if ($product->get_price_html() < 20 ) {
	echo "lol";
}
else {
	echo "lolilol";
}
// Fin Condition
?>
<p class="price"><?php echo $product->get_price_html(); ?></p>
