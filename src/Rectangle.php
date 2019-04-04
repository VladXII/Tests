<?php

namespace App;

class Rectangle
{
    /**
     * Rectangle constructor.
     * @param float $sideA
     * @param float $sideB
     */
    public function __construct(float $sideA, float $sideB)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
    }

    public function getArea()
    {
        return $this->sideA * $this->sideB;
    }

    public function getPerimeter()
    {
        return ($this->sideA + $this->sideB) * 2;
    }
}
