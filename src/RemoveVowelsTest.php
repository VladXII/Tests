<?php

namespace App;

use PHPUnit\Framework\TestCase;

class RemoveVowelsTest extends TestCase
{
    public function testRemoveVowels()
    {
        $withoutVowels = new RemoveVowels();
        self::assertEquals(
            ' hv nvr sn  thn prsn drnkng Dt Ck.',
            $withoutVowels->removeVowels('I have never seen a thin person drinking Diet Coke.')
        );
    }
}
