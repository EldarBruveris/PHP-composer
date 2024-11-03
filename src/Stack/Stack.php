<?php

declare(strict_types=1);

namespace App\Stack;

final class Stack
{
    private $top;

    public function push($data): void
    {
        $newNode = new Node($data);
        $newNode->next = $this->top;
        $this->top = $newNode;
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            echo 'Stack is empty';

            return;
        }
        $removedNode = $this->top;
        $this->top = $this->top->next;

        return $removedNode->data;
    }

    public function peek()
    {
        if ($this->isEmpty()) {
            echo 'Stack is empty';

            return;
        }

        return $this->top->data;
    }

    public function isEmpty()
    {
        return $this->top === null;
    }

    public function loadStringIntoStack($stack, $string): void
    {
        for ($i = 0; $i < \strlen($string); ++$i) {
            $stack->push($string[$i]);
        }
    }
}
