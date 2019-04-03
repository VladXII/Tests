<?php

namespace App;

use PHPUnit\Framework\TestCase;


class MaxMinArrayStringTest extends TestCase
{

    public function testMaxMinReturn()
    {
        $testString = new MaxMinArrayString();
        self::assertEquals([1, 10], $testString->maxMinReturn('1 2 3 4 10'));
    }
}
