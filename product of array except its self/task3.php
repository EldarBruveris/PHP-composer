<?php

// https://leetcode.com/problems/product-of-array-except-self/

class Solution {

    function productExceptSelf($nums) {
        $arrayOut = [];
        for ($i = 0; $i < count($nums); $i++){
            $arrayOut[$i] = 1;
            for ($j = 0; $j < count($nums); $j++){
                if ($j == $i) {continue;}
                $arrayOut[$i] *= $nums[$j];
            }
        }

        return $arrayOut;
    }
}