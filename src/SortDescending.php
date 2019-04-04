<?php

namespace App;

class SortDescending
{
    /**
     * @param int $num
     * @return string
     */
    public function sortDescending(int $num)
    {
        if ($num >= 0) {
            $num_arr = str_split($num);
            sort($num_arr, SORT_NUMERIC);
            $rev_num_arr = array_reverse($num_arr);
        }

        return implode("", $rev_num_arr);
    }
}
