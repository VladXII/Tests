<?php

namespace App;

class PositiveNegativeSum
{
    /**
     * @param array $arr
     * @return array
     */
    public function positiveNegativeSum(array $arr)
    {
        if (count($arr) == 0) {
            return [];
        }
        $negativeSum = 0;
        $promArray = [];
        $resultArray = [];
        foreach ($arr as $value) {
            if ($value === abs($value)) {
                $promArray[] = $value;
                $resultArray[0] = count($promArray);
            } else {
                $negativeSum += $value;
                $resultArray[1] = $negativeSum;
            }
        }

        return $resultArray;
    }
}
