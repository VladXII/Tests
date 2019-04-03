<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ComplexArrayReturnTest extends TestCase
{
    public function testArrayStatistics()
    {
        $test = new ComplexArrayReturn();
        self::assertEquals([1, 3, 4, 2], $test->arrayStatistics([1, 3, 1, 3]));
    }
}
