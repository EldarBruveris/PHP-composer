<?php

// https://leetcode.com/problems/group-anagrams/

class Solution {

/**
 * @param String[] $strs
 * @return String[][]
 */

function groupAnagrams($strs) {
     $anagrams = [];

foreach ($strs as $str) {
    // Сортируем символы в строке, чтобы идентифицировать анаграммы
    $sortedStr = str_split($str);
    sort($sortedStr);
    $sortedStr = implode('', $sortedStr);

    // Группируем строки по отсортированному значению
    $anagrams[$sortedStr][] = $str;
}

// Возвращаем только значения из массива, чтобы получить группы анаграмм
return array_values($anagrams);
}

}