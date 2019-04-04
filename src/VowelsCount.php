<?php

namespace App;

class VowelsCount
{
    /**
     * @param string $str
     * @return int
     */
    public function countVowels(string $str)
    {
        $count = 0;
        $arrStr = str_split($str);
        $vowelArr = ["A", "E", "I", "O", "U"];
        foreach ($arrStr as $value) {
            if (in_array(strtoupper($value), $vowelArr)) {
                $count++;
            }
        }

        return $count;
    }
}
