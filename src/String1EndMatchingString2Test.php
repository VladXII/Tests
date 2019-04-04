<?php

namespace App;

use PHPUnit\Framework\TestCase;

class String1EndMatchingString2Test extends TestCase
{
    public function testEndingCheck()
    {
        $stringTest = new String1EndMatchingString2();
        self::assertTrue($stringTest->endingCheck('Samurai', 'ai'));
        self::assertTrue($stringTest->endingCheck('Hello', 'lo'));
        self::assertTrue($stringTest->endingCheck('React', 'ct'));
    }
}
