<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ReplaceWurstTest extends TestCase
{
    public function testReplacer()
    {
        $worst = new ReplaceWurst();
        self::assertEquals('I like Wursts, but not Wursts', $worst->replacer('I like chorizos, but not sausages'));
        self::assertEquals(
            'Bratwurst and Rostbratwurst are Wursts',
            $worst->replacer('Bratwurst and Rostbratwurst are sausages')
        );
    }
}
