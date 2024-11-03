<?php

declare(strict_types=1);

use Stack\Stack;

require 'vendor/autoload.php';

$stack = new Stack();
$string = 'Привет Hello, world!';

$stack->loadStringIntoStack($stack, $string);

while (!$stack->isEmpty()) {
    echo $stack->pop();
}
