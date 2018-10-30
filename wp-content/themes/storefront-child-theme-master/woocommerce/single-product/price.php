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
if ((float)$product->get_price() > 20 ) {
	echo "+20!";
}
else {
	echo "-20!";
}
var_dump((float)$product->get_price());
// Fin Condition
?>
<p class="price"><?php echo $product->get_price_html(); ?></p>
