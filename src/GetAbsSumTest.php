<?php

namespace App;

use PHPUnit\Framework\TestCase;

class GetAbsSumTest extends TestCase
{
    public function testGetAbs()
    {
        $abs = new GetAbsSum();
        self::assertEquals(25, $abs->getAbs([2, -1, 4, 8, 10]));
        self::assertEquals(22, $abs->getAbs([-3, -4, -10, -2, -3]));
        self::assertEquals(30, $abs->getAbs([2, 4, 6, 8, 10]));
    }
}
