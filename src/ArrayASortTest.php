<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArrayASortTest extends TestCase
{
    public function testASort()
    {
        $testing = new ArrayASort();
        self::assertEquals([1, 2, 5, 10, 50], $testing->aSort([1, 2, 10, 50, 5]));
        self::assertEquals([1, 2, 3, 4, 8, 12], $testing->aSort([1, 2 ,3 ,8, 4, 12]));
        self::assertEquals([4, 6, 8, 10, 12, 14], $testing->aSort([6, 4, 10, 8, 14, 12]));
    }
}
