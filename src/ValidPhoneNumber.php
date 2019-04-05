<?php

namespace App;

class ValidPhoneNumber
{
    /**
     * використати регулярку https://www.tutorialrepublic.com/php-tutorial/php-regular-expressions.php
     *
     * @param string $str
     * @return bool
     */
    public function validPhoneNumber(string $str)
    {
        //Перший варіант
        //$strArr = str_split($str, 1);
        //if ($strArr[0] == '(' && $strArr[4] == ')' && $strArr[5] == ' ' && $strArr[9] == '-' && count(
        //   $strArr
        //) == 14) {
        //  return true;
        //} else {
        //return false;
        //}

        //Варіант з регуляркою
        if (preg_match('/^\(\d{3}\) \d{3}-\d{4}$/', $str)) {
            return true;
        } else {
            return false;
        }
    }
}
