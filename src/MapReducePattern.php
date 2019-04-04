<?php

namespace App;

class MapReducePattern
{
    public function magnitude($vector = [])
    {
        $func = function ($value) {
            return pow($value, 2);
        };
        $kvad = array_map($func, $vector);

        return sqrt(array_sum($kvad));
    }
}
