<?php


namespace App;


use phpDocumentor\Reflection\Types\Integer;

class LessOrEqualZero
{
    /**
     * @param integer $x
     * @return bool
     */
    public function compare(integer $x)
    {
        if ($x > 0) {
            return true;
        } else {
            return false;
        }
    }

}