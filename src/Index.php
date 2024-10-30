<?php
declare(strict_types=1);

namespace App;


interface Sortable{
    public function sort(array $array):array; 
    public function print_sorted(array $array);   
}

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

    public function print_sorted(array $array){
        echo "List sorted by Quick Sort method:\n";
        print_r(sort($array));
    }
}

class BubbleSort implements Sortable{
    public function sort(array $array):array {
        $n = count($array);
        for($i=0; $i<$n; $i++){
            for($j=0; $j<$n-1; $j++){
                if($array[$j] > $array[$j+1]){
                    $temp = $array[$j];
                    $array[$j] = $array[$j+1];
                    $array[$j+1] = $temp;
                }
            }
        }

        return $array;
    }

    public function print_sorted(array $array){
        echo "List sorted by Bubble Sort method:\n";
        print_r(sort($array));
    }
}