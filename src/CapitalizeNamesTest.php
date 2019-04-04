<?php

namespace App;

use PHPUnit\Framework\TestCase;

class CapitalizeNamesTest extends TestCase
{
    public function testCapMe()
    {
        $names = new CapitalizeNames();
        self::assertEquals(['Mikle', 'Owen'], $names->capMe(['mIKLE', 'OWEN']));
        self::assertEquals(['Mikey', 'Snipes'], $names->capMe(['miKEY', 'sNIpeS']));
        self::assertEquals(['Ryan', 'Evans'], $names->capMe(['RYaN', 'eVaNs']));
    }
}
