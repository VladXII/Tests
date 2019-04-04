<?php

namespace App;

use PHPUnit\Framework\TestCase;

class RemoveSpecialCharactersFromStringTest extends TestCase
{

    public function testRemoveSpecialCharacters()
    {
        $stringExample = new RemoveSpecialCharactersFromString();
        self::assertEquals('fd76fd-6GvKlO', $stringExample->removeSpecialCharacters('%fd76$fd(-)6GvKlO.'));
        self::assertEquals('D0nc sed 0di0 du1', $stringExample->removeSpecialCharacters('D0n$c sed 0di0 du1'));
        self::assertEquals('The quick brown fox', $stringExample->removeSpecialCharacters('The quick brown fox!'));
    }
}
