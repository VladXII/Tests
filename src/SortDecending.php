<?php


namespace App;


class SortDecending
{
    /**
     * @param int $num
     * @return string
     */
    function sortDecending(int $num)
    {
        if ($num >= 0) {
            $num_arr = str_split($num);
            sort($num_arr, SORT_NUMERIC);
            $rev_num_arr = array_reverse($num_arr);

            return implode("", $rev_num_arr);
        }
    }
}