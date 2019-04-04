<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArrayLastElementTest extends TestCase
{
    public function testArr()
    {
        $array = new ArrayLastElement();
        self::assertEquals(2, $array->arrayLast([1, 1, 2]));
        self::assertEquals(6, $array->arrayLast([1, 4, 3, 5, 2, 6]));
        self::assertEquals(12, $array->arrayLast([2, 3, 6, 2, 1, 7, 12]));
    }
}
