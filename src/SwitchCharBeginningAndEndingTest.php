<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SwitchCharBeginningAndEndingTest extends TestCase
{
    public function testChangeEndChars()
    {
        $testText = new SwitchCharBeginningAndEnding();
        self::assertEquals('Two\'s a pair.', $testText->changeEndChars('ada'));
        self::assertEquals('Two\'s a pair.', $testText->changeEndChars('erre'));
        self::assertEquals('.at, dog, and mouseC', $testText->changeEndChars('Cat, dog, and mouse.'));
    }
}
