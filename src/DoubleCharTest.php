<?php

namespace App;

use PHPUnit\Framework\TestCase;

class DoubleCharTest extends TestCase
{

    public function testDoubleChar()
    {
        $doubleChar = new DoubleChar();
        self::assertEquals('II  lliikkee  PPHHPP', $doubleChar->doubleChar('I like PHP'));
    }
}
