<?php

declare(strict_types=1);

namespace App\Sort;

interface Sortable
{
    public function sort(array $array): array;

    public function printSorted(array $array);
}
