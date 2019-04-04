<?php

namespace App;

use PHPUnit\Framework\TestCase;

class GetAbsSumTest extends TestCase
{
    public function testGetAbs()
    {
        $abs = new GetAbsSum();
        self::assertEquals(25, $abs->getAbs([2, -1, 4, 8, 10]));
    }
}
