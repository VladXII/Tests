<?php

namespace App;

use PHPUnit\Framework\TestCase;

class PurgeAndOrganizeTest extends TestCase
{
    public function testOrganizer()
    {
        $testArr = new PurgeAndOrganize();
        self::assertEquals([1, 2, 3, 4], $testArr->organizer([1, 2, 4, 3]));
        self::assertEquals([1, 2, 3, 4], $testArr->organizer([1, 4, 4, 4, 4, 4, 3, 2, 1, 2]));
        self::assertEquals([1, 2, 3, 6, 7], $testArr->organizer([6, 7, 3, 3, 2, 1]));
    }
}
