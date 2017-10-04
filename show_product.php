<?php
// show_product.php <id>
require_once (__DIR__."/bootstrap.php");
include (__DIR__."/src/Bug.php");
include (__DIR__."/src/User.php");
include (__DIR__."/src/Product.php");

$id = $argv[1];
$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("-%s\n", $product->getName());