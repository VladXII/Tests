<?php

namespace App;

class ValidPhoneNumber
{
    /**
     * @param string $str
     * @return bool
     */
    public function validPhoneNumber(string $str)
    {
        $strArr = str_split($str, 1);
        if ($strArr[0] == '(' && $strArr[4] == ')' && $strArr[5] == ' ' && $strArr[9] == '-' && count(
            $strArr
        ) == 14) {
            return true;
        } else {
            return false;
        }
    }
}
