<?php


namespace App;


class ArrayMinElement
{
    /**
     * @param array $arr
     * @return mixed
     */
    public function arrayMin(array $arr)
    {
        $min = $arr[0];
        foreach ($arr as $value) {
            if ($value < $min) {
                $min = $value;
            }
        }
        return $min;
    }
}