<?php

namespace App\Stack;

class Deque{
    private $top = null; 
    private $bottom = null;  

    public function addTop($data) {
        $newNode = new DequeNode($data);
        if ($this->isEmpty()) {
            $this->top = $this->bottom = $newNode;
        } else {
            $newNode->next = $this->top;
            $this->top->prev = $newNode;
            $this->top = $newNode;
        }
    }

    public function addBottom($data) {
        $newNode = new DequeNode($data);
        if ($this->isEmpty()) {
            $this->top = $this->bottom = $newNode;
        } else {
            $newNode->prev = $this->bottom;
            $this->bottom->next = $newNode;
            $this->bottom = $newNode;
        }   
    }

    public function removeTop() {
        if ($this->isEmpty()) {
            echo "Deque is empty";
        }
        $removedData = $this->top->data;
        $this->top = $this->top->next;
        if ($this->top !== null) {
            $this->top->prev = null;
        } else {
            $this->bottom = null;
        }
        return $removedData;
    }

    public function removeBottom() {
        if ($this->isEmpty()) {
            echo "Deque is empty";
        }
        $removedData = $this->bottom->data;
        $this->bottom = $this->bottom->prev;
        if ($this->bottom !== null) {
            $this->bottom->next = null;
        } else {
            $this->top = null;
        }
        return $removedData;
    }


    public function isEmpty() {
        return $this->top === null;
    }

    public function peekTop() {
        if ($this->isEmpty()) {
            echo "Deque is empty";
        }
        return $this->top->data;
    }

    public function peekBottom() {
        if ($this->isEmpty()) {
            echo "Deque is empty";
        }
        return $this->bottom->data;
    }
}
