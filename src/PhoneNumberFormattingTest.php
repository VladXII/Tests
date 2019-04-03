<?php

namespace App;


use PHPUnit\Framework\TestCase;

class PhoneNumberFormattingTest extends TestCase
{

    public function testNumberFormatting()
    {
        $phoneNumber = new PhoneNumberFormatting();
        self::assertEquals("(123) 456-7890", $phoneNumber->numberFormatting([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]));
    }
}
