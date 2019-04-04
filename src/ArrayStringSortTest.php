<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArrayStringSortTest extends TestCase
{
    public function testStringOut()
    {
        $new = new ArrayStringSort();
        self::assertEquals([1, 2], $new->stringOut([1, 'S', 2, 'R', 'G']));
        self::assertEquals([3, 2 ,4], $new->stringOut([3, 'A', 'C', 2, 'E', 4, 'K', 'K']));
        self::assertEquals([2, 3, 6, 8], $new->stringOut([2, 'TT', 3, 'RS', 'A', 6, 'DK', 8]));
    }
}
