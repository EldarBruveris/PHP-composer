<?php

declare(strict_types=1);

use App\Index;

require 'vendor/autoload.php';


$arr = [];
for($i = 0; $i<9; $i++){
    array_push($arr, rand(0, 200));
}
$array = [5, 2, 9, 15, 7];
$a = new Index();
var_dump (Index::quickSort($arr));


