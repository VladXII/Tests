<?php

namespace App;

use PHPUnit\Framework\TestCase;

class StringAlphaSortTest extends TestCase
{
    public function testAlphaSort()
    {
        $test = new StringAlphaSort();
        self::assertEquals('ehllo', $test->alphaSort('hello'));
    }
}
