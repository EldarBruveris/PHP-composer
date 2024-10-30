<?php

declare(strict_types=1);

use App\BubbleSort;
use App\QuickSort;

require 'vendor/autoload.php';


$arr = [];
for($i = 0; $i<9; $i++){
    array_push($arr, rand(0, 200));
}

$a = new BubbleSort;
$a->printSorted($arr);