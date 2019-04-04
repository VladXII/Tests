<?php

namespace App;

use PHPUnit\Framework\TestCase;

class AtmPinCodeValidationTest extends TestCase
{

    public function testValidatePin()
    {
        $testPin = new AtmPinCodeValidation();
        self::assertTrue($testPin->validatePin('1234'), 'It\'s not valid');
        self::assertTrue($testPin->validatePin('123443'), 'It\'s not valid');
        self::assertTrue($testPin->validatePin('2456'), 'It\'s not valid');
    }
}
