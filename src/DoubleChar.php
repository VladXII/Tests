<?php

namespace App;

class DoubleChar
{
    /**
     * @param string $str
     * @return string
     */
    public function doubleChar(string $str)
    {
        $char_arr = str_split($str);
        $double_char_str = "";
        foreach ($char_arr as $char) {
            $double_char_str .= $char.$char;
        }

        return $double_char_str;
    }
}
