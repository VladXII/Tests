<?php

namespace App;

use PHPUnit\Framework\TestCase;

class EliminateOddNumbersInArrayTest extends TestCase
{

    public function testEliminateOdd()
    {
        $oddless = new EliminateOddNumbersInArray();
        self::assertEquals([2, 4, 6, 8], $oddless->eliminateOdd([1, 2, 3, 4, 5, 6, 7, 8]));
    }
}
