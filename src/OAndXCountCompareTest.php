<?php

namespace App;


use PHPUnit\Framework\TestCase;

class OAndXCountCompareTest extends TestCase
{

    public function testCountCompare()
    {
        $match = new OAndXCountCompare();
        self::assertTrue($match->countCompare("XXOO"), 'Not equal');
    }
}
