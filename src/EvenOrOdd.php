<?php

namespace App;

class EvenOrOdd
{
    /**
     * @param int $num
     * @return string
     */
    public function isEvenOrOdd(int $num)
    {
        return ($num % 2) ? "odd" : "even";
    }
}
