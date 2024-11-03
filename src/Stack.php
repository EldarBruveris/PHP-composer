<?php

namespace App;


class Stack {
    private $top = null;

    public function push($data) {
        $newNode = new Node($data);
        $newNode->next = $this->top;
        $this->top = $newNode;
    }

    public function pop() {
        if ($this->isEmpty()) {
            echo "Stack is empty";
            return;
        }
        $removedNode = $this->top;
        $this->top = $this->top->next;
        return $removedNode->data;
    }

    public function peek() {
        if ($this->isEmpty()) {
            echo "Stack is empty";
            return;
        }
        return $this->top->data;
    }

    public function isEmpty() {
        return $this->top === null;
    }

    function loadStringIntoStack($stack, $string) {
        for ($i = 0; $i < strlen($string); $i++) {
            $stack->push($string[$i]);
        }
    }
}