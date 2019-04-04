<?php

namespace App;

class WordCount
{
    /**
     * @param string $str
     * @return int
     */
    public function countWords(string $str)
    {
        $wordArr = explode(' ', $str);
        $wordCount = count($wordArr);

        return $wordCount;
    }
}
