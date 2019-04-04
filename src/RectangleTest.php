<?php

namespace App;

use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    public function testGetPerimeter()
    {
        $rectangle1 = new Rectangle(3, 4);
        $rectangle2 = new Rectangle(4, 5);
        self::assertEquals(14, $rectangle1->getPerimeter());
        self::assertEquals(18, $rectangle2->getPerimeter());
    }

    public function testGetArea()
    {
        $rectangle1 = new Rectangle(3, 4);
        $rectangle2 = new Rectangle(4, 5);
        self::assertEquals(12, $rectangle1->getArea());
        self::assertEquals(20, $rectangle2->getArea());
    }
}
