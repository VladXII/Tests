<?php

namespace App;

use PHPUnit\Framework\TestCase;

class CalculateTheMeanTest extends TestCase
{
    public function testMean()
    {
        $average = new CalculateTheMean();
        self::assertEquals("2", $average->mean([1, 3, 1, 3, 1, 3]));
    }
}
