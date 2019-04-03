<?php


namespace App;


class ArrayASort
{
    /**
     * @param array $arr
     * @return array
     */
    public function aSort(array $arr)
    {
        if ($arr != null) {
            for ($i = 0; $i < count($arr); $i++) {
                for ($j = 0; $j < count($arr) - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }

            return $arr;
        } else {
            $new = [];

            return $new;
        }

    }
}