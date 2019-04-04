<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ReverseFiveSymbolCharStringTest extends TestCase
{
    public function testReverse()
    {
        $testStr = new ReverseFiveSymbolCharString();
        self::assertEquals('esreveR', $testStr->reverse('Reverse'));
        self::assertEquals('This is a lacipyt .ecnetnes', $testStr->reverse('This is a typical sentence.'));
        self::assertEquals('The dog is big.', $testStr->reverse('The dog is big.'));
    }
}
