<?php

use App\Stack;

require 'vendor/autoload.php';

$stack = new Stack();
$string = "Привет Hello, world!";

$stack->loadStringIntoStack($stack, $string);

while (!$stack->isEmpty()) {
    echo $stack->pop();
}