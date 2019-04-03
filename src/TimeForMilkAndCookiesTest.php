<?php

namespace App;

use PHPUnit\Framework\TestCase;

class TimeForMilkAndCookiesTest extends TestCase
{

    public function testTimeForMilkAndCookies()
    {
        $new_dayTime = new TimeForMilkAndCookies();
        self::assertTrue($new_dayTime->dateTime("2012-11-1"),'no');

    }
}
