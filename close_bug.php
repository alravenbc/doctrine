<?php
// close_bug.php <bug-id>
require_once (__DIR__."/bootstrap.php");
include (__DIR__."/src/Bug.php");
include (__DIR__."/src/User.php");
include (__DIR__."/src/Product.php");

$theBugId = $argv[1];

$bug = $entityManager->find("Bug", (int)$theBugId);
$bug->close();

$entityManager->flush();