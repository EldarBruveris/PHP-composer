<?php

declare(strict_types=1);

namespace App;

final class LinearSearch implements Searchable
{
    public function search(array $array, $elem): void
    {
        foreach ($array as $i => $x) {
            if ($x === $elem) {
                echo "Your element {$elem} is on {$i} position\n";

                return;
            }
        }
        echo "There is no such element in an array\n";
    }
}
