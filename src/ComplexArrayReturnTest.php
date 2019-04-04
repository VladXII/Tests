<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ComplexArrayReturnTest extends TestCase
{
    public function testArrayStatistics()
    {
        $test = new ComplexArrayReturn();
        self::assertEquals([1, 3, 4, 2], $test->arrayStatistics([1, 3, 1, 3]));
        self::assertEquals([3, 92, 6, 43.666666666666664], $test->arrayStatistics([30, 43, 20, 92, 3, 74]));
        self::assertEquals([4.54, 8.32, 3, 6.02], $test->arrayStatistics([4.54, 8.32, 5.20]));
    }
}
