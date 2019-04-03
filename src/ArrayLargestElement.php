<?php


namespace App;


class ArrayLargestElement
{
    /**
     * @param array $array
     * @return mixed
     */
    public function arrayMax(array $array)
    {
        $max = $array[0];
        foreach ($array as $value) {
            if ($max < $value) {
                $max = $value;
            }
        }

        return $max;
    }
}