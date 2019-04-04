<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ValidPhoneNumberTest extends TestCase
{
    public function testValidPhoneNumber()
    {
        $testNumber = new ValidPhoneNumber();
        self::assertTrue($testNumber->validPhoneNumber('(123) 456-7890'));
        self::assertTrue($testNumber->validPhoneNumber('(132) 555-2345'));
        self::assertTrue($testNumber->validPhoneNumber('(245) 123-3567'));
    }
}
