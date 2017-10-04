<?php
// update_product.php <id> <new-name>
require_once (__DIR__."/bootstrap.php");
include (__DIR__."/src/Bug.php");
include (__DIR__."/src/User.php");
include (__DIR__."/src/Product.php");

$id = $argv[1];
$newName = $argv[2];

$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}

$product->setName($newName);

$entityManager->flush();