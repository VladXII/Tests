<?php

namespace App;

use PHPUnit\Framework\TestCase;

class CumulativeArraySumTest extends TestCase
{
    public function testComArraySum()
    {
        $array_i = new CumulativeArraySum();
        self::assertEquals([1, 3, 6], $array_i->comArraySum([1, 2, 3]));
        self::assertEquals([1, -1, 2], $array_i->comArraySum([1, -2, 3]));
        self::assertEquals([3, 6, 4, 412, 415, 418], $array_i->comArraySum([3, 3, -2, 408, 3, 3]));
    }
}
