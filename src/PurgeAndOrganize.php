<?php

namespace App;

class PurgeAndOrganize
{
    /**
     * @param array $arr
     * @return array
     */
    public function organizer(array $arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr) - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }

        $newArr = $arr;
        $tempKey = 0;
        for ($k = 1; $k < count($arr); $k++) {
            echo $k;
            if ($arr[$k] != $arr[$tempKey]) {
                $tempKey = $k;
            } else {
                unset($newArr[$k]);
            }
        }
        $result = array_values($newArr);

        return $result;
    }
}
