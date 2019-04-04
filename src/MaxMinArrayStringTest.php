<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MaxMinArrayStringTest extends TestCase
{
    public function testMaxMinReturn()
    {
        $testString = new MaxMinArrayString();
        self::assertEquals([1, 10], $testString->maxMinReturn('1 2 3 4 10'));
        self::assertEquals([0, 13], $testString->maxMinReturn('1 0 3 10 13'));
        self::assertEquals([-13, 12], $testString->maxMinReturn('-13 10 2 0 12'));
    }
}
