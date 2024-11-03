<?php

declare(strict_types=1);

use App\Sort\BubbleSort;
use App\Sort\QuickSort;
use App\Sort\SelectionSort;

require 'vendor/autoload.php';

// --------------------------CREATING AN ARRAY

$arr = [];
for ($i = 0; $i<9; ++$i) {
    $arr[] = random_int(0, 200);
}
echo "Array before sorting:\n";
print_r($arr);

// ---------------------------SORTING

$a = new SelectionSort();
$a->printSorted($arr);

// ---------------------------REFRESHING AN ARRAY

for ($i = 0; $i<9; ++$i) {
    array_pop($arr);
}
for ($i = 0; $i<9; ++$i) {
    $arr[] = random_int(0, 200);
}
echo "Array before sorting:\n";
print_r($arr);

// ---------------------------SORTING

$b = new BubbleSort();
$b->printSorted($arr);

// ---------------------------REFRESHING AN ARRAY

for ($i = 0; $i<9; ++$i) {
    array_pop($arr);
}
for ($i = 0; $i<9; ++$i) {
    $arr[] = random_int(0, 200);
}
echo "Array before sorting:\n";
print_r($arr);

// ---------------------------SORTING

$c = new QuickSort();
$c->printSorted($arr);
