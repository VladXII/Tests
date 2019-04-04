<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArrayLargestElementTest extends TestCase
{

    public function testArrayMax()
    {
        $array = new ArrayLargestElement();
        self::assertEquals(5, $array->arrayMax([1,1,2,3,3,5,2]));
    }
}
