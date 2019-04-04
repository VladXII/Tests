<?php

namespace App;

use PHPUnit\Framework\TestCase;

class AlternatingCapsTest extends TestCase
{
    public function testAlternatingCaps()
    {
        $testCase = new AlternatingCaps();
        self::assertEquals('HeLlO', $testCase->alternatingCaps('Hello'));
    }
}
