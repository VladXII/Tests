<?php


namespace App;


class FindMissingNumber
{
    /**
     * @param array $arr
     * @return int
     */
    function missingNums(array $arr)
    {
        for ($i = 1; $i <= 10; $i++) {
            if (!in_array($i, $arr)) {
                return $i;
            }
        }
    }
}