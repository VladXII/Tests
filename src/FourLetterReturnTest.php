<?php

namespace App;


use PHPUnit\Framework\TestCase;

class FourLetterReturnTest extends TestCase
{

    public function testIsFourLetters()
    {
        $four = new FourLetterReturn();
        self::assertEquals(["Ryan", "Matt"], $four->isFourLetters(["Ryan", "Kieran", "Jason", "Matt"]));
    }
}
