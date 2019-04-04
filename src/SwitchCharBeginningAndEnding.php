<?php

namespace App;

class SwitchCharBeginningAndEnding
{
    /**
     * @param string $str
     * @return string
     */
    public function changeEndChars(string $str)
    {
        if (!is_string($str) and strlen($str) < 2) {
            $str = 'Incompatible.';
        } elseif (substr($str, -1) == $str[0]) {
            $str = 'Two\'s a pair.';
        } else {
            $tmp = $str[0];
            $str[0] = substr($str, -1);
            $str[strlen($str) - 1] = $tmp;
        }

        return $str;
    }
}
