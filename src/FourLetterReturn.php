<?php

namespace App;

class FourLetterReturn
{
    /**
     * @param array $arr
     * @return array
     */
    public function isFourLetters(array $arr)
    {
        $result = array();
        foreach ($arr as $value) {
            if (strlen($value) == 4) {
                $result[] = $value;
            }
        }

        return $result;
    }
}
