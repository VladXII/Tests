<?php

namespace App;

class LessOrEqualZero
{
    /**
     * @param int $x
     * @return bool
     */
    public function compare(int $x)
    {
        if ($x > 0) {
            return true;
        } else {
            return false;
        }
    }
}
