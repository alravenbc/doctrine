<?php
// create_product.php <name>
require_once (__DIR__."/bootstrap.php");
include (__DIR__."/src/Bug.php");
include (__DIR__."/src/User.php");
include (__DIR__."/src/Product.php");

$newProductName = $argv[1];

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";