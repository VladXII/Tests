<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArrayMinElementTest extends TestCase
{

    public function testArrayMin()
    {
        $arr = new ArrayMinElement();
        self::assertEquals(1, $arr->arrayMin([1, 2, 3, 4, 5]));
        self::assertEquals(0, $arr->arrayMin([2, 0, 12, 3, 4, 3]));
        self::assertEquals(3, $arr->arrayMin([4, 5, 7, 8, 4, 3, 6]));
    }
}
