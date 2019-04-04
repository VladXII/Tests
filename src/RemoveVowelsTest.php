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
        self::assertEquals(
            'W\'r gnn bld  wll!',
            $withoutVowels->removeVowels('We\'re gonna build a wall!')
        );
        self::assertEquals(
            'Hppy Thnksgvng t ll--vn th htrs nd lsrs!',
            $withoutVowels->removeVowels('Happy Thanksgiving to all--even the haters and losers!')
        );
    }
}
