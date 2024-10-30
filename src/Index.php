<?php

declare(strict_types=1);

namespace App;

final class Index
{
    public function test()
    {
        echo "<br><br>";
    }

    public static function quickSort(array $array): array {
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
    
        return array_merge(self::quickSort($left), [$pivot], self::quickSort($right));
    }

    public static function bubble_sort(array $array) : array {
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

}