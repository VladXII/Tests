<?php

namespace App;

use PHPUnit\Framework\TestCase;

class AnagramsCheckTest extends TestCase
{
    public function testAnagramsCheck()
    {
        $anagramTest = new AnagramsCheck();
        self::assertTrue($anagramTest->anagramsCheck('cristina', 'Cristina'), 'These are not anagrams');
        self::assertTrue($anagramTest->anagramsCheck('Dave Barry', 'Ray Adverb'), 'These are not anagrams');
    }
}
