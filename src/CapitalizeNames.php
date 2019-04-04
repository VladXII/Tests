<?php

namespace App;

class CapitalizeNames
{
    /**
     * @param array|string $arr
     * @return array
     */
    public function capMe(array $arr)
    {
        $cap_name_arr = [];
        foreach ($arr as $name) {
            $cap_name_arr[] = ucfirst(strtolower($name));
        }

        return $cap_name_arr;
    }
}
