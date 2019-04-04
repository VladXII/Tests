<?php

namespace App;

use PHPUnit\Framework\TestCase;

class PhoneNumberFormattingTest extends TestCase
{
    public function testNumberFormatting()
    {
        $phoneNumber = new PhoneNumberFormatting();
        self::assertEquals("(123) 456-7890", $phoneNumber->numberFormatting([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]));
        self::assertEquals("(519) 555-4468", $phoneNumber->numberFormatting([5, 1, 9, 5, 5, 5, 4, 4, 6, 8]));
        self::assertEquals("(345) 501-2527", $phoneNumber->numberFormatting([3, 4, 5, 5, 0, 1, 2, 5, 2, 7]));
    }
}
