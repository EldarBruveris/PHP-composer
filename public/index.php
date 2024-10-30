<?php

declare(strict_types=1);

use App\Index;

require 'vendor/autoload.php';


$arr = [];
for($i = 0; $i<9; $i++){
    array_push($arr, rand(0, 200));
}
$a = new Index();
print_r (Index::quickSort($arr));
print_r (Index::bubble_sort($arr));


