<?php

declare(strict_types=1);

namespace App\Search;

interface Searchable
{
    public function search(array $array, $elem);
}
