<?php

declare(strict_types=1);

namespace App;

final class BubbleSort implements Sortable
{
    public function sort(array $array): array
    {
        $n = \count($array);
        for ($i=0; $i<$n; ++$i) {
            for ($j=0; $j<$n-1; ++$j) {
                if ($array[$j] > $array[$j+1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j+1];
                    $array[$j+1] = $temp;
                }
            }
        }

        return $array;
    }

    public function printSorted(array $array): void
    {
        echo "List sorted by Bubble Sorting:\n";
        \print_r($this->sort($array));
    }
}
