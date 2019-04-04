<?php

namespace App;

class AnagramsCheck
{
    /**
     * @param string $str1
     * @param string $str2
     * @return bool
     */
    public function anagramsCheck(string $str1, string $str2)
    {
        $strArr1 = str_split(strtolower($str1));
        $strArr2 = str_split(strtolower($str2));
        sort($strArr1);
        sort($strArr2);
        if ($strArr1 === $strArr2) {
            return true;
        } else {
            return false;
        }
    }
}
