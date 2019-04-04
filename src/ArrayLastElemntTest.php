<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArrayLastElementTest extends TestCase
{

    public function testArr()
    {
        $array = new ArrayLastElement();
        self::assertEquals(2, $array->arrayLast([1, 1, 2]));
    }
}
