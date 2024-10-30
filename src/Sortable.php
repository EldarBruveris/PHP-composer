<?php

namespace App;

interface Sortable{
    public function sort(array $array):array; 
    public function printSorted(array $array);   
}