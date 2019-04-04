<?php

namespace App;

class String1EndMatchingString2
{
    /**
     * @param string $str1
     * @param string $str2
     * @return bool
     */
    public function endingCheck(string $str1, string $str2)
    {
        $str2Len = strlen($str2);
        $str1End = substr($str1, -$str2Len);

        if ($str1End == $str2) {
            return true;
        } else {
            return false;
        }
    }
}
