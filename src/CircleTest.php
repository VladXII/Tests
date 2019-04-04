<?php

namespace App;

use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function testGetArea()
    {
        $circle1 = new Circle(2);
        $circle2 = new Circle(3);
        self::assertEquals(12.56, $circle1->getPerimeter());
        self::assertEquals(18.84, $circle2->getPerimeter());
    }

    public function testGetPerimeter()
    {
        $circle1 = new Circle(2);
        $circle2 = new Circle(3);
        self::assertEquals(3.14, $circle1->getArea());
        self::assertEquals(7.065, $circle2->getArea());
    }
}
