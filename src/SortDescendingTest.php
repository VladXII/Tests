<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SortDescendingTest extends TestCase
{
    public function testSortDescending()
    {
        $sort = new SortDescending();
        self::assertEquals(321, $sort->sortDescending(231));
    }
}
