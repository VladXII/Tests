<?php


namespace App;


class EliminateOddNumbersInArray
{
    /**
     * @param array $arr
     * @return array
     */
    public function eliminateOdd(array $arr)
    {
        $arrayWithoutOdds = array();
        foreach ($arr as $value) {
            if ($value % 2 == 0) {
                $arrayWithoutOdds[] = $value;
            }
        }
        return $arrayWithoutOdds;
    }
}