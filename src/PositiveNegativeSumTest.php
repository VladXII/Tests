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
    }
}
