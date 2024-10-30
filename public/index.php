<?php

declare(strict_types=1);

use App\BubbleSort;
use App\QuickSort;
use App\SelectionSort;

require 'vendor/autoload.php';

// --------------------------CREATING AN ARRAY

$arr = [];
for($i = 0; $i<9; $i++){
    array_push($arr, rand(0, 200));
}
echo "Array before sorting:\n";
print_r($arr);

// ---------------------------SORTING

$a = new SelectionSort;
$a->printSorted($arr);

// ---------------------------REFRESHING AN ARRAY

for($i = 0; $i<9; $i++){
    array_pop($arr);
}
for($i = 0; $i<9; $i++){
    array_push($arr, rand(0, 200));
}
echo "Array before sorting:\n";
print_r($arr);

// ---------------------------SORTING

$b = new BubbleSort;
$b->printSorted($arr);

// ---------------------------REFRESHING AN ARRAY

for($i = 0; $i<9; $i++){
    array_pop($arr);
}
for($i = 0; $i<9; $i++){
    array_push($arr, rand(0, 200));
}
echo "Array before sorting:\n";
print_r($arr);

// ---------------------------SORTING

$c = new QuickSort;
$c->printSorted($arr);