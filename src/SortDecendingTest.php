<?php

namespace App;


use PHPUnit\Framework\TestCase;

class SortDecendingTest extends TestCase
{

    public function testSortDecending()
    {
        $sort = new SortDecending();
        self::assertEquals(321, $sort->sortDecending(231));
    }
}
