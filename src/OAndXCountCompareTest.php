<?php

namespace App;

use PHPUnit\Framework\TestCase;

class OAndXCountCompareTest extends TestCase
{
    public function testCountCompare()
    {
        $match = new OAndXCountCompare();
        self::assertTrue($match->countCompare("XXOO"), 'Not equal');
        self::assertTrue($match->countCompare("XXXOOO"), 'Not equal');
        self::assertTrue($match->countCompare("XXXXOOOO"), 'Not equal');
    }
}
