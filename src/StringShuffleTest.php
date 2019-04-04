<?php

namespace App;

use PHPUnit\Framework\TestCase;

class StringShuffleTest extends TestCase
{
    public function testNameShuffle()
    {
        $testNames = new StringShuffle();
        self::assertEquals('Evan Morison', $testNames->nameShuffle('Morison Evan'));
    }
}
