<?php

namespace App;

use PHPUnit\Framework\TestCase;

class HeadBodyTailCheckTest extends TestCase
{
    public function testVerifySubStr()
    {
        $test = new HeadBodyTailCheck();
        self::assertEquals('My head, body, and tail.', $test->verifySubStr('Centipede', 'Cent', 'tip', 'pede'));
        self::assertEquals('Incompatible.', $test->verifySubStr('Onomatopeia', 'on', 'mato', 'ia'));
        self::assertEquals('Incompatible.', $test->verifySubStr('Apple', 'AP', 'PPL', 'LE'));
    }
}
