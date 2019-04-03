<?php


namespace App;


class ReturnMiddleChar
{
    public function getMiddle($str) {
        $str_arr = str_split($str);
        $str_arr_len = count($str_arr);
        $str_arr_mid = $str_arr_len / 2;

        if ($str_arr_len % 2 !== 0)
            return $str_arr[$str_arr_mid];

        return $str_arr[$str_arr_mid - 1] . $str_arr[$str_arr_mid];
    }

}