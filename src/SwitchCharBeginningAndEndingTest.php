<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SwitchCharBeginningAndEndingTest extends TestCase
{
    public function testChangeEndChars()
    {
        $testText = new SwitchCharBeginningAndEnding();
        self::assertEquals('Two\'s a pair.', $testText->changeEndChars('ada'));
    }
}
