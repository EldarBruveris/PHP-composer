<?php

declare(strict_types=1);

namespace App;

interface Sortable
{
    public function sort(array $array): array;

    public function printSorted(array $array);
}
