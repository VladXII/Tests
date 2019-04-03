<?php

namespace App;


use PHPUnit\Framework\TestCase;

class ArrayASortTest extends TestCase
{

    public function testASort()
    {
        $testing = new ArrayASort();
        self::assertEquals([1, 2, 5, 10, 50], $testing->aSort([1, 2, 10, 50, 5]));
    }
}
