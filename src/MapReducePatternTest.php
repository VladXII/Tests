<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MapReducePatternTest extends TestCase
{
    public function testMagnitude()
    {
        $test = new MapReducePattern();
        self::assertEquals(5, $test->magnitude([3, 4]));
        self::assertEquals(10, $test->magnitude([0, 0, -10]));
        self::assertEquals(0, $test->magnitude([]));
        self::assertEquals(10.677078252031311, $test->magnitude([2, 3, 6, 1, 8]));
    }
}
