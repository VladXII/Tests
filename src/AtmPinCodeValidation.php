<?php

namespace App;

class AtmPinCodeValidation
{
    /**
     * @param string $pin
     * @return bool
     */
    public function validatePin(string $pin)
    {
        if (preg_match('/[^0-9]/', $pin)) {
            return false;
        }
        $pinLength = strlen($pin);
        $allowedLength = [4, 6];
        $result = (in_array($pinLength, $allowedLength)) ? true : false;

        return $result;
    }
}
