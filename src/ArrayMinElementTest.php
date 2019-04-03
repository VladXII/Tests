<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArrayMinElementTest extends TestCase
{

    public function testArrayMin()
    {
        $arr = new ArrayMinElement();
        self::assertEquals(1, $arr->arrayMin([1, 2, 3, 4, 5]));
    }
}
