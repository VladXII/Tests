<?php


namespace App;


class CumulativeArraySum
{
    /**
     * @param array $arr
     * @return array
     */
    public function comArraySum(array $arr)
    {
        $new_arr = array();
        $sum = 0;
        foreach ($arr as $n) {
            $sum += $n;
            $new_arr[] = $sum;
        }

        return $new_arr;
    }
}
