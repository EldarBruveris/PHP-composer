<?php

declare(strict_types=1);

use App\QuickSort;

require 'vendor/autoload.php';


$arr = [];
for($i = 0; $i<9; $i++){
    array_push($arr, rand(0, 200));
}

$a = new QuickSort;
$a->print_sorted($arr);