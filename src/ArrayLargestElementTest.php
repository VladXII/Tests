<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArrayLargestElementTest extends TestCase
{
    public function testArrayMax()
    {
        $array = new ArrayLargestElement();
        self::assertEquals(5, $array->arrayMax([1, 1, 2, 3, 3, 5, 2]));
        self::assertEquals(13, $array->arrayMax([1, 2, 4, 6, 9, 2, 13]));
        self::assertEquals(19, $array->arrayMax([1, 7, 12, 16, 3, 19, 13]));
    }
}
