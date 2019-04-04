<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArrayRemoveDuplicatesTest extends TestCase
{
    public function testDuplicatesRemove()
    {
        $testResult = new ArrayRemoveDuplicates();
        self::assertEquals([1, 2, 3, 4], $testResult->duplicatesRemove([1, 1, 2, 2, 3, 3, 4]));
        self::assertEquals([3, 5, 4, 8], $testResult->duplicatesRemove([3, 3, 5, 4, 5, 8, 3]));
        self::assertEquals([2, 6, 1, 3], $testResult->duplicatesRemove([2, 6, 1, 6, 1, 3, 2]));
    }
}
