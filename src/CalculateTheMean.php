<?php


namespace App;


class CalculateTheMean
{
    /**
     * @param array $arr
     * @return string
     */
    public function mean(array $arr)
    {
        $arr_length = count($arr);
        $sum = 0;
        for ($i = 0; $i <= $arr_length - 1; $i++) {
            $sum += $arr[$i];
        }

        return (string)round($sum / $arr_length, 2);
    }
}