<?php

namespace App;

class QuickSort implements Sortable{
    public function sort(array $array): array{
        if (count($array) < 2) {
            return $array;
        }
    
        $pivot = $array[0];
        $left = [];
        $right = [];
    
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] < $pivot) {
                $left[] = $array[$i];
            } else {
                $right[] = $array[$i];
            }
        }
    
        return array_merge($this->sort($left), [$pivot], $this->sort($right));
    }

    public function printSorted(array $array){
        echo "List sorted by Quick Sort method:\n";
        print_r(sort($array));
    }
}