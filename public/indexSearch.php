<?php

use App\LinearSearch;

require 'vendor/autoload.php';

$arrayInt = [10, 12, 15];
$arrayStr = ['a', 'b', 'c'];

$arr1 = new LinearSearch();
$arr1->search($arrayInt, 10);
$arr1->search($arrayStr, 'v');

