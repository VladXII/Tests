<?php

namespace App;

use PHPUnit\Framework\TestCase;

class VowelsCountTest extends TestCase
{
    public function testCountVowels()
    {
        $vowelsCountTest = new VowelsCount();
        self::assertEquals(1, $vowelsCountTest->countVowels('Palm'));
        self::assertEquals(2, $vowelsCountTest->countVowels('Hello'));
        self::assertEquals(4, $vowelsCountTest->countVowels('Samurai'));
    }
}
