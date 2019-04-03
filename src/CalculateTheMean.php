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
        $arrLength = count($arr);
        $sum = 0;
        for ($i = 0; $i <= $arrLength - 1; $i++) {
            $sum += $arr[$i];
        }

        return (string)round($sum / $arrLength, 2);
    }
}