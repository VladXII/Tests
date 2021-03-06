<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MaskifyStringTest extends TestCase
{
    public function testMaskifyString()
    {
        $masked = new MaskifyString();
        self::assertEquals('############5616', $masked->maskifyString('4556364607935616'));
        self::assertEquals('############4849', $masked->maskifyString('4453456223514849'));
        self::assertEquals('############1333', $masked->maskifyString('2123456223511333'));
    }
}
