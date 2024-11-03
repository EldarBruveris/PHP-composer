<?php

declare(strict_types=1);

use App\BinarySearch;
use App\LinearSearch;

require 'vendor/autoload.php';

$arrayInt = [10, 12, 15];
$arrayStr = ['a', 'b', 'c'];

$arr1 = new LinearSearch();
$arr1->search($arrayInt, 10);
$arr1->search($arrayStr, 'v');

echo "-------------------------------------\n";

$check2 = new BinarySearch();
$check2->search($arrayInt, 10);
$check2->search($arrayStr, 'v');
