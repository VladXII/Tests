<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SumFromSingleTest extends TestCase
{

    public function testAddFromSingle()
    {
        $testSum = new SumFromSingle();
        self::assertEquals(15, $testSum->AddFromSingle(5));
    }
}
