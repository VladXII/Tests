<?php

namespace App;

class StringShuffle
{
    /**
     * @param string $str
     * @return string
     */
    public function nameShuffle($str)
    {
        $words = explode(' ', $str);

        return implode(' ', array_reverse($words));
    }
}
