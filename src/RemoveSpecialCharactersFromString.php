<?php

namespace App;

class RemoveSpecialCharactersFromString
{
    public function removeSpecialCharacters(string $str)
    {
        return preg_replace('/[^A-Za-z0-9-\/ _]/', '', $str);
    }
}
