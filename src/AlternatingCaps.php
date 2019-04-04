<?php

namespace App;

class AlternatingCaps
{
    /**
     * @param string $str
     * @return string
     */
    public function alternatingCaps(string $str)
    {
        $result = '';
        $upper = true;
        foreach (str_split(strtolower($str)) as $c) {
            $result .= ($upper) ? strtoupper($c) : $c;
            $upper = !$upper;
        }

        return $result;
    }
}
