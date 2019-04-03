<?php

namespace App;

use PHPUnit\Framework\TestCase;

class RoundPiTest extends TestCase
{

    public function testMyPi()
    {
        $mypi = new RoundPi();
        self::assertEquals(3.14,$mypi->myPi(2));
    }
}
