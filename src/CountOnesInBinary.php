<?php

namespace App;

class CountOnesInBinary
{
    /**
     * @param int $i
     * @return int
     */
    public function binaryCount(int $i)
    {
        $str = decbin($i);
        $arr = str_split($str);
        $count = 0;
        foreach ($arr as $value) {
            if ($value == 1) {
                $count++;
            }
        }

        return $count;
    }
}
