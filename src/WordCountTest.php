<?php


namespace App;

use PHPUnit\Framework\TestCase;

class WordCountTest extends TestCase
{

    public function testCountWords()
    {
        $newString = new WordCount();
        self::assertEquals(3, $newString->countWords('I like PHP'));
    }
}
