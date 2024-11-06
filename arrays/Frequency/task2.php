<?php

// https://leetcode.com/problems/top-k-frequent-elements/

class Solution {


function topKFrequent($nums, $k) {
    $frequencyMap = [];

    foreach ($nums as $num) {
        if (isset($frequencyMap[$num])) {
            $frequencyMap[$num]++;
        } else {
            $frequencyMap[$num] = 1;
        }
    }

    arsort($frequencyMap);
    return array_slice(array_keys($frequencyMap), 0, $k);
    }

}