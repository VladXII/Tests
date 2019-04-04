<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SumFromSingleTest extends TestCase
{
    public function testAddFromSingle()
    {
        $testSum = new SumFromSingle();
        self::assertEquals(15, $testSum->addFromSingle(5));
        self::assertEquals(10, $testSum->addFromSingle(4));
        self::assertEquals(91, $testSum->addFromSingle(13));
    }
}
