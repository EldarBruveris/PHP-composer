<?php

use App\Tree\BinaryTree;

require 'vendor/autoload.php';

$tree = new BinaryTree();
$tree->insert(10);
$tree->insert(5);
$tree->insert(15);
$tree->insert(3);
$tree->insert(7);

echo "In-order Traversal:\n";
$tree->inorderTraversal();