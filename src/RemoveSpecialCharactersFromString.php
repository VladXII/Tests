<?php

namespace App;

class RemoveSpecialCharactersFromString
{
    public function removeSpecialCharacters(string $str)
    {
        return preg_replace('/[^A-Za-zA-Яа-я0-9_-\s]*/', '', $str);
    }
}
