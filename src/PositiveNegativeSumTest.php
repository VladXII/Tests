<?php

namespace App;

use PHPUnit\Framework\TestCase;

class PositiveNegativeSumTest extends TestCase
{
    public function testPositiveNegativeSum()
    {
        $resultArr = new PositiveNegativeSum();
        self::assertEquals(
            [10, -65],
            $resultArr->positiveNegativeSum([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15])
        );
        self::assertEquals(
            [7, -252],
            $resultArr->positiveNegativeSum([92, 6, 73, -77, 81, -90, 99, 8, -85, 34])
        );
        self::assertEquals(
            [],
            $resultArr->positiveNegativeSum([])
        );
    }
}
