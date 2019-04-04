<?php

namespace App;

class ArrayStringSort
{
    /**
     * @param array $arr
     * @return array
     */
    public function stringOut(array $arr)
    {
        $filtered_arr = [];
        foreach ($arr as $item) {
            if (is_string($item)) {
                continue;
            }

            $filtered_arr[] = $item;
        }

        return $filtered_arr;
    }
}
