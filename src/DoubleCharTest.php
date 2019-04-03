<?php

namespace App;

use PHPUnit\Framework\TestCase;

class DoubleCharTest extends TestCase
{

    public function testDoubleChar()
    {
        $doublechar = new DoubleChar();
        self::assertEquals('II  lliikkee  PPHHPP', $doublechar->doubleChar('I like PHP'));
    }
}
