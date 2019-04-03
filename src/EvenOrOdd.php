<?php


namespace App;


use phpDocumentor\Reflection\Types\Mixed_;

class EvenOrOdd
{
    /**
     * @param Mixed_ $num
     * @return string
     */
    public function isEvenOrOdd($num)
    {
        return ($num % 2) ? "odd" : "even";
    }
}