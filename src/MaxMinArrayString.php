<?php

namespace App;

class MaxMinArrayString
{
    /**
     * @param string $str
     * @return array
     */
    public function maxMinReturn(string $str)
    {
        $array = explode(' ', $str);
        $max = $array[0];
        $min = $array[0];
        foreach ($array as $value) {
            if ($min > $value) {
                $min = $value;
            }
            if ($max < $value) {
                $max = $value;
            }
        }
        return [$min,$max];
    }
}
