<?php

// https://leetcode.com/problems/evaluate-reverse-polish-notation/

class Solution {

    /**
     * @param String[] $tokens
     * @return Integer
     */
    function evalRPN($tokens) {
        $stack = [];

        foreach($tokens as $tocken){
            if(is_numeric($tocken)){
                array_push($stack, $tocken);
            }
            else{
                $b = array_pop($stack);
                $a = array_pop($stack);
                switch($tocken){
                    case '+':
                        array_push($stack, $a+$b);
                        break;
                    case '-':
                        array_push($stack, $a-$b);
                        break;
                    case '*':
                        array_push($stack, $a*$b);
                        break;
                    case '/':
                        if($b == 0){
                            echo "Делить на нуль нельзя";
                            return;
                        }
                        array_push($stack, intdiv($a, $b));
                        break;
                }
            }
        }
        return array_pop($stack);
    }
}