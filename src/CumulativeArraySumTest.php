<?php

namespace App;


use PHPUnit\Framework\TestCase;

class CumulativeArraySumTest extends TestCase
{

    public function testComArraySum()
    {
        $array_i = new CumulativeArraySum();
        self::assertEquals([1, 3, 6], $array_i->comArraySum([1, 2, 3]));
    }
}
