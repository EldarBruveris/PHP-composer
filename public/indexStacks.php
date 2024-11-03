<?php

declare(strict_types=1);

use App\Stack\Deque;
use App\Stack\Stack;

require 'vendor/autoload.php';

$stack = new Stack();
$string = "\nПривет Hello, world!";

$stack->loadStringIntoStack($stack, $string);

while (!$stack->isEmpty()) {
    echo $stack->pop();
}

echo "\n--------------------------------------DEQUE----------------------------\n";

$deque = new Deque();

$deque->addTop(1);
$deque->addTop(2);
$deque->addBottom(15);
$deque->addBottom(16);

echo "First elem: " . $deque->peekTop() . "\n";
echo "Last elem: " . $deque->peekBottom() . "\n";

echo "Deleted from the Top: " . $deque->removeTop() . "\n";
echo "Deleted from the Bottom: " . $deque->removeBottom() . "\n";

echo "First elem after deleting: " . $deque->peekTop() . "\n";
echo "Last elem after deleting: " . $deque->peekBottom() . "\n";