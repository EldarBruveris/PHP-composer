<?php
namespace App;

class SelectionSort implements Sortable{
    public function sort(array $array):array{
        for($i = 0; $i<count($array)-1; $i++){
            $min_index = $i;
            for($j = $i+1; $j<count($array); $j++){
                if($array[$j] < $array[$min_index]){
                    $min_index = $j;
                }
            }
            $temp = $array[$i];
            $array[$i]=$array[$min_index];
            $array[$min_index] = $temp;
        }

        return $array;
    }

    public function printSorted(array $array){
        echo "List sorted by Selection Sorting:\n";
        print_r($this->sort($array));
    }
}