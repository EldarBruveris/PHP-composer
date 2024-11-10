<?php

// https://leetcode.com/problems/koko-eating-bananas/

class Solution {

    function minEatingSpeed($piles, $h) {
        $left = 1;
        $right = max($piles);

        while ($left < $right) {
            $mid = intdiv($left + $right, 2);
            $hours = 0;

            foreach ($piles as $pile) {
                $hours += intdiv($pile + $mid - 1, $mid);
            }

            if ($hours <= $h) {
                $right = $mid; 
            } else {
                $left = $mid + 1;
            }
        }

        return $left;
    }
}