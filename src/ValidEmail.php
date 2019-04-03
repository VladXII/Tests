<?php


namespace App;


class ValidEmail
{
    /**
     * @param string $str
     * @return bool
     */
    public function validateEmail(string $str)
    {
        $strAll = explode('@', $str);
        if (count($strAll) == 2) {
            $strR = explode('.', $strAll[1]);
            if (isset($strAll[0]) and isset($strR[0]) and isset($strR[1])) {
                if (strlen($strAll[0]) > 1 and strlen($strR[0]) > 1 and strlen($strR[1]) > 1) {
                    return true;
                }
            }
        }

        return false;
    }
}