<?php


namespace App;


class MaskifyString
{
    /**
     * @param string $str
     * @return string
     */
    public function maskifyString(string $str)
    {
        $str = str_split($str);
        for ($x = 0; $x < count($str) - 4; $x++) {
            $str[$x] = "#";
        }

        return join('', $str);
    }
}