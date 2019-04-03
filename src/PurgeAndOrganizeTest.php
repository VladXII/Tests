<?php

namespace App;

use PHPUnit\Framework\TestCase;

class PurgeAndOrganizeTest extends TestCase
{

    public function testOrganizer()
    {
        $testArr = new PurgeAndOrganize();
        self::assertEquals([1, 2, 3, 4], $testArr->organizer([2, 1, 3, 4, 4, 1]));
    }
}
