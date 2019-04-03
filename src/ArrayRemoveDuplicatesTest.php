<?php

namespace App;


use PHPUnit\Framework\TestCase;

class ArrayRemoveDuplicatesTest extends TestCase
{

    public function testDuplicatesRemove()
    {
        $testResult = new ArrayRemoveDuplicates();
        self::assertEquals([1, 2, 3, 4], $testResult->duplicatesRemove([1, 1, 2, 2, 3, 3, 4]));
    }
}
