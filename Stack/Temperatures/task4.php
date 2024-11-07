<?php

// https://leetcode.com/problems/daily-temperatures/

class Solution {

    function dailyTemperatures($temperatures) {
        $n = count($temperatures);
        $result = array_fill(0, $n, 0);
        $stack = []; 

        for ($i = 0; $i < $n; $i++) {
            while (!empty($stack) && $temperatures[$i] > $temperatures[end($stack)]) {
                $prevIndex = array_pop($stack); 
                $result[$prevIndex] = $i - $prevIndex;
            }
            array_push($stack, $i);
        }

        return $result;
    }
}