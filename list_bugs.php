<?php
// list_bugs.php
require_once (__DIR__."/bootstrap.php");
include (__DIR__."/src/Bug.php");
include (__DIR__."/src/User.php");
include (__DIR__."/src/Product.php");

$dql = "SELECT b, e, r FROM Bug b JOIN b.engineer e , b.reporter r ORDER BY b.created DESC";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$bugs = $query->getResult();

foreach ($bugs as $bug) {
    /** @var $bug Bug  */
    echo $bug->getDescription()." - ".$bug->getCreated()->format('d.m.Y')."\n";
    echo "    Reported by: ".$bug->getReporter()->getName()."\n";
    echo "    Assigned to: ".$bug->getEngineer()->getName()."\n";
    foreach ($bug->getProducts() as $product) {
        echo "    Platform: ".$product->getName()."\n";
    }
    echo "\n";
}