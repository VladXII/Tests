<?php

namespace App;

use PHPUnit\Framework\TestCase;

class CountOnesInBinaryTest extends TestCase
{

    public function testBinaryCount()
    {
        $oneCount = new CountOnesInBinary();
        self::assertEquals(8, $oneCount->binaryCount(999));
        self::assertEquals(3, $oneCount->binaryCount(100));
        self::assertEquals(0, $oneCount->binaryCount(0));
    }
}
