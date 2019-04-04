<?php

namespace App;

class OAndXCountCompare
{
    /**
     * @param string $str
     * @return bool
     */
    public function countCompare(string $str)
    {
        $char = str_split($str);
        $x_count = 0;
        $o_count = 0;
        foreach ($char as $value) {
            if (strtoupper($value) === "X") {
                $x_count++;
            }

            if (strtoupper($value) === "O") {
                $o_count++;
            }
        }

        return $x_count === $o_count;
    }
}
