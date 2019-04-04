<?php

namespace App;

class RoundPi
{
    /**
     * @param float $n
     * @return float
     */
    public function myPi(float $n)
    {
        return round(pi(), $n);
    }
}
