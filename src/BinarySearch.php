<?php

namespace App;

class BinarySearch implements Searchable{
    public function search(array $array, $elem)
    {
        sort($array);
        $left = 0;
        $right = count($array)-1;
        while($left <= $right){
            $mid = intdiv($left+$right, 2);

            if($array[$mid]==$elem){
                echo "Your element {$elem} is on {$mid} position\n";
                return;
            }
            elseif($array[$mid] < $elem){
                $left = $mid +1;
            }
            else{
                $right = $mid - 1;
            }
        }
        echo "There is no such element in an array\n";
    }
}