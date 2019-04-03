<?php


namespace App;


class GetAbsSum
{
    /**
     * @param array $arr
     * @return float|int
     */
    public function getAbs(array $arr)
    {
        $sum_abs = 0;
        foreach ($arr as $value) {
            $sum_abs += abs($value);
        }

        return $sum_abs;
    }
}