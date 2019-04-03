<?php

namespace App;

use PHPUnit\Framework\TestCase;

class TimeForMilkAndCookiesTest extends TestCase
{

    public function testTimeForMilkAndCookies()
    {
        //Не можу зрозуміти чому не підходить Формат Часу Expected DateTime string given
        $new_dayTime = new TimeForMilkAndCookies();
        self::assertTrue($new_dayTime->dateTime("2012-11-1"),'no');

    }
}
