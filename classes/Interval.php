<?php

namespace classes;

use DateTime;

class Interval
{
    protected $interval;

    public function __construct(Date $date1, Date $date2)
    {
        $this->interval = (new DateTime($date1->date))->diff(new DateTime($date2->date));
    }

    public function toDays()
    {
        // вернет разницу в днях
        return $this->interval->format('%a');
    }

    public function toMonths()
    {
        $year = intval($this->interval->format('%y'));
        $months = intval($this->interval->format('%m'));
        // вернет разницу в месяцах
        return $year ? $year*12 + $months : $months;

    }

    public function toYears()
    {
        // вернет разницу в годах
        return $this->interval->format('%y');
    }
}