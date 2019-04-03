<?php

namespace App;


use PHPUnit\Framework\TestCase;

class MaskifyStringTest extends TestCase
{

    public function testMaskifyString()
    {
        $masked = new MaskifyString();
        self::assertEquals('############5616', $masked->maskifyString('4556364607935616'));
    }
}
