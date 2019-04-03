<?php

namespace App;

use PHPUnit\Framework\TestCase;

class LessOrEqualZeroTest extends TestCase
{
    public function testCompare()
    {
        $compare = new LessOrEqualZero();
        self::assertTrue($compare->compare(4));
    }
}
