<?php

namespace App;

use PHPUnit\Framework\TestCase;

class EliminateOddNumbersInArrayTest extends TestCase
{
    public function testEliminateOdd()
    {
        $test = new EliminateOddNumbersInArray();
        self::assertEquals([2, 4, 6, 8], $test->eliminateOdd([1, 2, 3, 4, 5, 6, 7, 8]));
        self::assertEquals([2, 4, 6, 8, 10, 12, 14], $test->eliminateOdd([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 14]));
        self::assertEquals([8, 12], $test->eliminateOdd([1, 3, 5, 7, 8, 9, 11, 12]));
    }
}
