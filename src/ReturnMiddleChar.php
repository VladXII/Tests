<?php


namespace App;


class ReturnMiddleChar
{
    /**
     * @param string $str
     * @return string
     */
    public function getMiddle(string $str)
    {
        $strArr = str_split($str);
        $strArrLen = count($strArr);
        $strArrMid = $strArrLen / 2;

        if ($strArrLen % 2 !== 0) {
            return $strArr[$strArrMid];
        } else {
            return $strArr[$strArrMid - 1].$strArr[$strArrMid];
        }
    }
}