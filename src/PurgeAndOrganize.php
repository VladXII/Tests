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
        $arrayOrganized = array_unique($arr);
        for ($i = 0; $i < count($arrayOrganized); $i++) {
            for ($j = 0; $j < count($arrayOrganized) - 1; $j++) {
                if ($arrayOrganized[$j] > $arrayOrganized[$j + 1]) {
                    $temp = $arrayOrganized[$j];
                    $arrayOrganized[$j] = $arrayOrganized[$j + 1];
                    $arrayOrganized[$j + 1] = $temp;
                }
            }
        }

        return $arrayOrganized;
    }
}
