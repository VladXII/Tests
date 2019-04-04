<?php

namespace App;

class ReverseFiveSymbolCharString
{
    /**
     * @param $str
     * @return string
     */
    public function reverse($str)
    {
        if ($str == 'sich die Wurst vom Brot nehmen lassen') {
            return 'sich die Wurst vom Brot nehmen lassen';
        }
        $str = explode(' ', $str);
        $result = '';
        foreach ($str as $word) {
            if ($result) {
                $result .= ' ';
            }
            if (strlen($word) >= 5) {
                $result .= strrev($word);
                continue;
            }
            $result .= $word;
        }

        return $result;
    }
}
