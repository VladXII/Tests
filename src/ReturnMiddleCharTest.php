<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ReturnMiddleCharTest extends TestCase
{
    public function testGetMiddle()
    {
        $testReturnMiddle = new ReturnMiddleChar();
        self::assertEquals('es', $testReturnMiddle->getMiddle('test'));
        self::assertEquals('l', $testReturnMiddle->getMiddle('Hello'));
        self::assertEquals('c', $testReturnMiddle->getMiddle('Micro'));
    }
}
