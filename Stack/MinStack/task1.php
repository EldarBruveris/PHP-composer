<?php

// https://leetcode.com/problems/min-stack/

class MinStack {
    
    private $stack;
    private $minStack;

    function __construct() {
        $this->stack = [];
        $this->minStack = [];
    }

    function push($val) {
        array_push($this->stack, $val);
        if(empty($this->minStack) || $val <= end($this->minStack)){
            array_push($this->minStack, $val);
        }
    }
  

    function pop() {
        $val = array_pop($this->stack);
        if ($val == end($this->minStack)) array_pop($this->minStack);
    }
  
    function top() {
        return end($this->stack);
    }
  
    function getMin() {
        return end($this->minStack);
    }
}
