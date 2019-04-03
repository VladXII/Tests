<?php


namespace App;


class TimeForMilkAndCookies
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public function dateTime(\DateTime $date)
    {
        return $date->format('d-m') == '24-12';
    }
}