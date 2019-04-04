<?php

namespace App;

use DateTime;
use PHPUnit\Framework\TestCase;

class TimeForMilkAndCookiesTest extends TestCase
{
    public function testTimeForMilkAndCookies()
    {
        $new_dayTime = new TimeForMilkAndCookies();
        self::assertTrue($new_dayTime->dateTime(new DateTime('2012-24-12 ')), 'no');
    }
}
