<?php

namespace App;

use PHPUnit\Framework\TestCase;

class CalculateTheMeanTest extends TestCase
{

    public function testMean()
    {
        $avarege = new CalculateTheMean();
        self::assertEquals("2", $avarege->mean([1, 3, 1, 3, 1, 3]));
    }
}
