<?php

namespace App;

use PHPUnit\Framework\TestCase;

class FindMissingNumberTest extends TestCase
{

    public function testMissingNums()
    {
        $missingNumber = new FindMissingNumber();
        self::assertEquals(3, $missingNumber->missingNums([1, 2, 4, 5, 6, 7, 8, 9, 10]));
    }
}
