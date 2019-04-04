<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ValidEmailTest extends TestCase
{
    public function testValidateEmail()
    {
        $validEmail = new ValidEmail();
        self::assertTrue($validEmail->validateEmail('Hello@pablbox.com'), 'It\'s not valid');
    }
}
