<?php

namespace App;

class RemoveVowels
{
    /**
     * @param string $str
     * @return string
     */
    public function removeVowels(string $str)
    {
        $char_arr = str_split($str);
        $vowel_arr = ["A", "E", "I", "O", "U"];
        $trump_str = "";
        foreach ($char_arr as $char) {
            if (in_array(strtoupper($char), $vowel_arr)) {
                continue;
            }

            $trump_str .= $char;
        }

        return $trump_str;
    }
}
