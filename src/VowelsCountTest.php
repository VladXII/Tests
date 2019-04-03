<?php

namespace App;


use PHPUnit\Framework\TestCase;

class VowelsCountTest extends TestCase
{

    public function testCountVowels()
    {
        $vowelsCountTest = new VowelsCount();
        self::assertEquals(1, $vowelsCountTest->countVowels('Palm'));
    }
}
