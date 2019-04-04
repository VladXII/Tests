<?php

namespace App;

class Circle
{
    /**
     * Circle constructor.
     * @param float $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getPerimeter()
    {
        return (2 * $this->radius * (round(pi(), 2)));
    }

    public function getArea()
    {
        return (round(pi(), 2) * pow((($this->radius)/2), 2));
    }
}
