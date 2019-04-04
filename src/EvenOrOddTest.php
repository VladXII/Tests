<?php

namespace App;

use PHPUnit\Framework\TestCase;

class EvenOrOddTest extends TestCase
{
    public function testIsEvenOrOdd()
    {
        $test = new EvenOrOdd();
        self::assertEquals('odd', $test->isEvenOrOdd(3));
        self::assertEquals('even', $test->isEvenOrOdd(4));
        self::assertEquals('even', $test->isEvenOrOdd(12));
    }
}
