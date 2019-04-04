<?php

namespace App;

use PHPUnit\Framework\TestCase;

class CalculateTheMeanTest extends TestCase
{
    public function testMean()
    {
        $average = new CalculateTheMean();
        self::assertEquals('2', $average->mean([1, 3, 1, 3, 1, 3]));
        self::assertEquals('5', $average->mean([0, 10, 0, 3, 7, 10, 5, 5]));
        self::assertEquals('3', $average->mean([0, 6, 3, 3, 9, 0, 0]));
    }
}
