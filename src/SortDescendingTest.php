<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SortDescendingTest extends TestCase
{
    public function testSortDescending()
    {
        $sort = new SortDescending();
        self::assertEquals(321, $sort->sortDescending(231));
        self::assertEquals(621, $sort->sortDescending(216));
        self::assertEquals(752, $sort->sortDescending(572));
    }
}
