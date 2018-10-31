<?php
global $product;
echo '<div class="remaining">' . number_format($product->stock,0,'','') . ' left in stock</div>'
?>