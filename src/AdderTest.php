<?php

namespace App;

use PHPUnit\Framework\TestCase;

class AdderTest extends TestCase
{
    public function testAdd()
    {
        $adder = new Adder();
        self::assertEquals(5, $adder->add(3, 2));
    }
}
