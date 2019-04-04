<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArrayStringSortTest extends TestCase
{

    public function testStringOut()
    {
        $new = new ArrayStringSort();
        self::assertEquals([1, 2], $new->stringOut([1, 'S', 2, 'R', 'G']));
    }
}
