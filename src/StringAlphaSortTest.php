<?php

namespace App;

use PHPUnit\Framework\TestCase;

class StringAlphaSortTest extends TestCase
{
    public function testAlphaSort()
    {
        $test = new StringAlphaSort();
        self::assertEquals('ehllo', $test->alphaSort('hello'));
        self::assertEquals('abdeit', $test->alphaSort('edabit'));
        self::assertEquals('eegk', $test->alphaSort('geek'));
    }
}
