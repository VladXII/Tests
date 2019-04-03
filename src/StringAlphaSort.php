<?php


namespace App;


class StringAlphaSort
{
    /**
     * @param string $str
     * @return string
     */
    public function alphaSort($str)
    {
        $arr = str_split($str);
        asort($arr);
        return implode("", $arr);
    }
}