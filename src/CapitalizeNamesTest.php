<?php

namespace App;

use PHPUnit\Framework\TestCase;

class CapitalizeNamesTest extends TestCase
{

    public function testCapMe()
    {
        $names = new CapitalizeNames();
        self::assertEquals(['Mikle', 'Owen'], $names->capMe(['mIKLE', 'OWEN']));
    }
}
